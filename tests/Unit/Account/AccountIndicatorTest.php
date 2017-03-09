<?php

namespace Tests\Unit\Account;

use Agilin\Models\Account\AccountIndicator;
use Agilin\Models\Application\ApplicationIndicator;
use Agilin\Models\QualitySystem\Metric\MetricRepository;
use Agilin\Models\System\SystemIndicator;
use Tests\APITest;
use Tests\Helper\MockAccount;
use Tests\Helper\MockAccountIndicator;
use Tests\Helper\MockSystemIndicator;

class AccountIndicatorTest extends APITest {

    /** @test */
    public function it_summarizes_systems_indicator()
    {
        $account = MockAccount::getAccountWithSystems();
        $accountIndicator = MockAccountIndicator::getPlainIndicator();

        $indicator = $this->createPartialMock(SystemIndicator::class, array('calculate'));
        $indicator->method('calculate')->will($this->onConsecutiveCalls(20, 40, 60));
        $indicator = MockSystemIndicator::getOrUpdateIndicatorWithRules($indicator);

        $result = $accountIndicator->summarizeSystemIndicator($account, $indicator);
        $this->assertEquals(40, $result);

    }

    /** @test */
    public function it_calculates_indicator_on_systems()
    {
        $account = MockAccount::getAccountWithSystems();
        $accountIndicator = $this->createPartialMock(AccountIndicator::class, array('summarizeSystemIndicator', 'saveIndicator', 'getDependencyByKey'));
        $accountIndicator->method('getDependencyByKey')->willReturn(MockSystemIndicator::getPlainIndicator());
        $accountIndicator->method('summarizeSystemIndicator')->will($this->onConsecutiveCalls(20, 40, 60));
        $accountIndicator = MockAccountIndicator::getOrUpdateIndicatorWithRules($accountIndicator);
        $result = $accountIndicator->calculateFromSystems($account);
        $this->assertEquals(60, $result);
    }

    /** @test */
    public function it_calculates_on_db()
    {
        $account = MockAccount::getAccountWithSystems();
        $accountIndicator = $this->createPartialMock(AccountIndicator::class, array('hasRecordOnDate', 'calculateFromDB'));
        $accountIndicator->method('hasRecordOnDate')->willReturn(true);
        $accountIndicator->method('calculateFromDB')->willReturn(37);
        $result = $accountIndicator->calculate($account);
        $this->assertEquals(37, $result);
    }

    public function it_calculates_from_systems()
    {
        $account = MockAccount::getAccountWithSystems();
        $accountIndicator = $this->createPartialMock(AccountIndicator::class, array('hasRecordOnDate', 'calculateFromSystems'));
        $accountIndicator->method('hasRecordOnDate')->willReturn(true);
        $accountIndicator->method('calculateFromSystems')->willReturn(258);
        $result = $accountIndicator->calculate($account);
        $this->assertEquals(258, $result);
    }
}