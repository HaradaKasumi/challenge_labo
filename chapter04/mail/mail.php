<?php

    declare(strict_types=1);

    mb_language('Japanese');
    mb_internal_encoding('UTF-8');

    /**
     * mb_send_mailの第4引数にセットする日本語のエンコード
     */
    function encodeHeader($value)
    {
        return mb_encode_mimeheader
            (
                mb_convert_encoding($value, 'ISO-2022-JP', 'UTF-8'),
                'ISO-2022-JP',
                'B'
            );
    }

    /**
     * 送信元のメールアドレス。ご自身のものに書き換えてください。
     */
    $from = '[FROM-ADDRESS-HERE]';

    /**
     * 送信先のメールアドレス。送信して問題の無いアドレスに書き換えてください。
     */
    $to = '[TO-ADDRESS-HERE]';

    /**
     * メールの表題
     */
    $subject = 'テストメール';

    /**
     * メールの本文
     */
    $body = <<< BODY
このメールはPHPからテスト送信したものです。(1行目)
このメールはPHPからテスト送信したものです。(2行目)
このメールはPHPからテスト送信したものです。(3行目)
BODY;

    /**
     * メールの送信元(日本語表記)
     */
    $sender = encodeHeader('システム管理者');

    // メールのヘッダ行を生成する。
    $header = <<< HEADER
From: {$sender} <{$from}>
Reply-To: {$from}
HEADER;

    // メール送信する。
    $isMailSent = mb_send_mail($to, $subject, $body, $header);

    echo $isMailSent ? 'メールを送信しました。' : 'メールは送信できませんでした。';
    echo PHP_EOL;
