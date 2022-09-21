<?php
    session_start();

    if(isset($_SESSION['A']) && isset($_SESSION['B']) && isset($_SESSION['C']) && isset($_SESSION['AnswerList'])){
        $A_count = $_SESSION['A'];
        $B_count = $_SESSION['B'];
        $C_count = $_SESSION['C'];
        $Answer_List = $_SESSION['AnswerList'];
        $Total_count = $A_count + $B_count + $C_count;
        $result_desc = "";

        if($A_count > $B_count && $A_count > $C_count){
            $result_desc = "<b>[Emphaty]: </b>You are emphatic. You see yourself in someone else’s situation before doing
            decisions. You tend to listen to other’s voices.";
        }elseif($B_count > $A_count && $B_count > $C_count){
            $result_desc = "<b>[Self-Awareness]: </b>You are conscious of your own character, feelings, motives, and desires.
            The process can be painful but it leads to greater self-awareness.";
        }elseif($C_count > $A_count && $C_count > $B_count){
            $result_desc = "<b>[Slef-Management]: </b>You manage yourself well; You take responsibility for your own behavior
            and well-being.";
        }else{
            $result_desc = "<b>[Self-Awareness]: </b>You are conscious of your own character, feelings, motives, and desires.
            The process can be painful but it leads to greater self-awareness.";
        }
    }
?>