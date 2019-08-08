<?php

function check_user_age( $age ) {
  $min_age = 18;
  $age = intval( $age );
  if( $age >= $min_age ) {
    return true;
  }
  $access_denined = [
    'message' => 'Извените, вам запрещено пользоваться этим'
  ];
  header('Location: http://phplessons.loc/access.php?' . http_build_query( $access_denined ));
}

function send_email( $data ) {
  $headers = 'Content-Type: text/html; charset=UTF-8;' . "\r\n";
  $subject = '';
  $to = 'seahunter00@gmail.com';
  $message = '';

  if( ! empty( $data ) ) {
    foreach( $data as $item ) {
      $message .=  sprintf( '%s: %s' . "\r\n", $item['label'], $item['value']  );
    }
  }

  $result = mail($to, $subject, $message, $headers);
  if( $result ) {
    // header('Location: http://phplessons.loc/thanks.php');
  } else {
    echo 'Ошибка отпавки формы';
  }
}

if( isset( $_POST['action'] ) && $_POST['action'] == 'send_email' ) {

  check_user_age( $_POST['age'] );

  $data = [
    'name' => [
      'label' => 'Имя',
      'value' => $_POST['name'],
    ],
    'last_name' => [
      'label' => 'Фамилия',
      'value' => $_POST['last_name'],
    ],
    'age' => [
      'label' => 'Возраст',
      'value' => $_POST['age'],
    ],
    'phone' => [
      'label' => 'Телефон',
      'value' => $_POST['phone'],
    ],
    'email' => [
      'label' => 'Email',
      'value' => $_POST['email'],
    ],
    'question' => [
      'label' => 'Вопрос',
      'value' => $_POST['question']
    ]
  ];

  send_email( $data );
  
}