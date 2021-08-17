<?php

    return [
        'attributes' =>[
            'email' => 'メールアドレス',
            'password' => 'パスワード'
        ],
        'required' => '必須入力です',
        'max' => [
            'string' => ':max文字以内で入力してください'
        ],
        'min' => [
            'string' => ':min文字以上で入力してださい'
        ],
        'email' => 'メール形式で入力してださい',
        'string' => '文字列で入力してください',
        'confirmed' => ':attributeを確認用と一致させてください'
     ];
?>