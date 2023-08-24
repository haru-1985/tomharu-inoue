<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>じゃんけん 結果</title>
</head>
<body>
  <?php
    // ユーザーが選んだ手を取得
    if (isset($_POST['user_hand'])) {
      $user_hand = $_POST['user_hand'];

      // コンピューターの手をランダムに選択 (R: Rock, S: Scissors, P: Paper)
      $computer_hand = ['R', 'S', 'P'][array_rand(['R', 'S', 'P'])];

      // じゃんけんの結果を判定
      $result = '';
      if ($user_hand === $computer_hand) {
        $result = '引き分け';
      } elseif (
        ($user_hand === 'R' && $computer_hand === 'S') ||
        ($user_hand === 'S' && $computer_hand === 'P') ||
        ($user_hand === 'P' && $computer_hand === 'R')
      ) {
        $result = '勝ち';
      } else {
        $result = '負け';
      }

      // 結果を表示
      echo '<p>あなたの手: ';
      echo ($user_hand === 'R') ? 'グー' : (($user_hand === 'S') ? 'チョキ' : 'パー');
      echo '</p>';
      echo '<p>コンピューターの手: ';
      echo ($computer_hand === 'R') ? 'グー' : (($computer_hand === 'S') ? 'チョキ' : 'パー');
      echo '</p>';
      echo '<p>結果: ' . $result . '</p>';
    } else {
      echo '<p>手が選ばれていません。</p>';
    }
  ?>
</body>
</html>
