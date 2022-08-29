<?php 
    //�α����� �ϸ� session�� ������ �����ϰ� �� �������鿡�� ��� ����ϰ��� ��.
    //�α��ο� ��� ȭ�鱸���� �ٸ��⿡ ���ǿ� ����Ǿ� �ִ� ȸ������ �� id, name, level �� �о����
    session_start(); //������ �����ϵ� �о���� ����ϰ��� �ϸ� �� �Լ��� ����
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="EUC-KR">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BaAB�� ������ �Ǿ����">
    <link rel="stylesheet" type="text/css" href="../css/stely_form.css">
    <link rel="stylesheet" type="text/css" href="../css/stely_potoplay.css">
    <link rel="icon" type="image/x-icon" href="https://i.ibb.co/swHGtC0/logo1.png">
    <title>�����÷���</title>
    
</head>
<body>
    
<div class="bg">
        <!---------------background_scroll(bgScroll.php------------------------------------------------>
        <?php include "../lib/bgScroll.php"?>
        <div class="bg_macbook">
            <img src="https://i.ibb.co/PYr4rTt/ipd1.png">
            <div class="screen">
                <div class="wrap">
                <header class="pop_header">
                    <div class="pop_header_wrap">
                    <div class="pop_header_title">
                            <a class="pop_header_back" href="back();">
                                <img src="https://i.ibb.co/dB2ztsX/back.png" alt="back">
                            </a>
                            <h2>�����÷���</h2>
                        </div>
                        <?php include "../lib/headerPotoplay_form.php" ?>
                    </div>
                </header>
                    <section class="pop_section">
                        <!-------- ���� �̹��� ���� ------>
                            <!--  �ΰ����� ���� -->
                            <!-- <div class="pop_section_logo">
                                <div>
                                    <img src="https://i.ibb.co/swHGtC0/logo1.png" alt="BaAB">
                                </div>
                            </div>     -->
                            <!-- �ΰ� �Ʒ� �������� -->
                            <div class="pop_section_mainList">
                                <!-- 1. main_Top -->
                                <article class="pop_section_main_top">
                                   <div class="pop_section_main_topText">
                                        <h3>���� �ٷ�,<br>��ȭ �����ϰ� �����÷���!</h3>
                                        <a href=""><p>�����÷���?</p></a>
                                   </div>                                    
                                    <div class="pop_section_main_topList">
                                    <?php include "../movielist/screening_movie.php" ?>
                                    </div>  
                                </article>
                                <article class="pop_section_main_center">
                                    <div class="pop_section_main_header">
                                    <h4>�� �����÷���</h4>
                                        <a href="./potoplay_userlist_form.php"><p>��ü����</p></a>
                                    </div>
                                    <div class="pop_section_main_centerList">
                                    <?php include "./potoplay_userlist.php" ?>
                                    </div>  
                                </article>
                                      
                                    <!-- include "../lib/dbconn.php";
                                    //�α��� �Ǿ��ִ� ȸ���� ������ �о���� ������ 
                                    $sql="SELECT * FROM movie.potoplay order by potoplay_number desc";
                                    $result = $connect->query($query);
                                    $total = mysqli_num_rows($result); -->
                                <!-- 2. main_bottom -->
                                <article class="pop_section_main_bottom">
                                    <div class="pop_section_main_header">
                                    <h4>�����÷��� �ڶ��ϱ�</h4>
                                    <a href="./potoplay_userlist_form.php"><div>�� �����÷��� �ڶ�</div></a>
                                        <div>
                                            <ul>
                                                <li>�ֽ�</li>&VerticalSeparator;
                                                <li>�ְ�</li>&VerticalSeparator;
                                                <li>����</li>&VerticalSeparator;
                                            </ul>
                                        </div>

                                    </div>

                                    <div>
                                        <table>


                                        </table>
                                    </div>
                                </article>
                            </div>                                      
                        </div>
                    </section>
                    <footer class="footer">
                        <?php include "../lib/footer.php" ?>
                    </footer>
                    <!---------------menu(nav)------------------------------------------------>
                <div>
            </div>
        </div>
    </div>
    <!-- <script src="../js/script_member.js"></script> -->
    <!-- ���� �ڹٽ�ũ��Ʈ �ۼ�
    <!- ���� ����ó��(���̵�üũ������)�� ���� ���� �ڹٽ�ũ��Ʈ�� �ۼ� -->
    <script>

        // window.onload : ������ �ε� �Ϸ� ���¸� ��Ÿ���ϴ�
        // document.getElementById : Ư�� ��ü �±� ���̵� �����մϴ� 
        // scrollTop : Ư�� �±� ��ũ�� ��ġ�� �����մϴ�        



        /* [html ���� �ε� �� �̺�Ʈ ��� ��� �ǽ�] */
        window.onload = function() {
            console.log("");
            console.log("[window onload] : [start]");
            console.log("");
        };



        /* [top ��ũ�� �̺�Ʈ �Լ� ����] */
        function top_scroll_move(){
            console.log("");
            console.log("[top_scroll_move] : [start]");
            console.log("");

            // ��ũ���� �̵��� ���̾ƿ� ���̵� ����
            let screen = document.querySelector(".screen");

            // [�� ������� ��ũ�� �̵� �ǽ�]
            screen.scrollTop = 0;
        };



        /* [bottom ��ũ�� �̺�Ʈ �Լ� ����] */
        function bottom_scroll_move(){
            console.log("");
            console.log("[bottom_scroll_move] : [start]");
            console.log("");

            // ��ũ���� �̵��� ���̾ƿ� ���̵� ����
            let screen = document.querySelector(".screen");

            // [�� �ϴ����� ��ũ�� �̵� �ǽ�]
            screen.scrollTop = screen.scrollHeight;
        };
        //--------------------footer------------------------------
        // footer���� ��ư
        let footerBtn = document.querySelector('.footerBtn'),
            footerBtn_Ch = document.querySelector('.footerBtn_Ch'),
            footerSlide = document.querySelector('.footer_center');

            footerBtn.addEventListener('click', function() {   
            if (footerSlide.style.display == 'none') {
                footerSlide.style.display = 'block';        
            } else {
                footerSlide.style.display = 'none';     
            } 
        });

    </script>
</body>
    
</html>