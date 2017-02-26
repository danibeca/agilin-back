<?php

namespace Agilin\Utils\Transformers;

use Agilin\Models\Account\Account;

class UserTransformer extends Transformer {

    public function transform($user)
    {
        $account = Account::find($user->account_id);
        return [
            'id' => $user['id'],
            'email' => $user['email'],
            'name' => $user['name'],
            'accountId' => $user['account_id'],
            'accountName' => $account['name'],
            'createdAt' => $user['created_at'],
            'updatedAt' => $user['updated_at'],
            'confirmed' => (boolean) $user['confirmed']
        ];
    }
}