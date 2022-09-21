<?php
session_start();

if (isset($_POST['btn_submit'])) {
    $answerList = $_POST['form_answer'];
    $A_count = 0;
    $B_count = 0;
    $C_count = 0;
    $answerList_tbl = "<table>
    <tr>
      <th>Question #</th>
      <th>Answer</th>
    </tr>";

    //   SORTING
    $i = 0;
    foreach ($answerList as $value) {
        $i++;
        $item = strtolower($value);
        $answerList_tbl .= "<tr>
        <td>$i</td>
        <td>$value</td>
      </tr>";
        if ($item == 'a') {
            $A_count++;
        } elseif ($item == 'b') {
            $B_count++;
        } elseif ($item == 'c') {
            $C_count++;
        }
    }
    $answerList_tbl .= "</table>";
    $_SESSION['A'] =  $A_count;
    $_SESSION['B'] =  $B_count;
    $_SESSION['C'] =  $C_count;
    $_SESSION['AnswerList'] = $answerList_tbl;

    // REDIRECT
    header("location:result.php");
}
?>