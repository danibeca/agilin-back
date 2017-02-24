<?php

namespace Agilin\Utils\Transformers;

class UserTransformer extends Transformer {

    public function transform($user)
    {
        return [
            'id' => $user['id'],
            'email' => $user['email'],
            'name' => $user['name'],
            'accountId' => $user['account_id'],
            'createdAt' => $user['created_at'],
            'updatedAt' => $user['updated_at'],
            'confirmed' => (boolean) $user['confirmed']
        ];
    }
}