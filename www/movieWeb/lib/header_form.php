
<?php 
    //�α����� �ϸ� session�� ������ �����ϰ� �� �������鿡�� ��� ����ϰ��� ��.
    //�α��ο� ��� ȭ�鱸���� �ٸ��⿡ ���ǿ� ����Ǿ� �ִ� ȸ������ �� id, name, level �� �о����
    // session_start(); //������ �����ϵ� �о���� ����ϰ��� �ϸ� �� �Լ��� ����
 
    $userId="";
    $userName="";
    $grane=""; //ȸ����� : 1~5��� [1���:������, 5���:�ű�ȸ��]
    $userPoint="";
 
    if( isset($_SESSION['userId'])) $userid= $_SESSION['userId'];
    if( isset($_SESSION['userName'])) $username= $_SESSION['userName'];
    if( isset($_SESSION['grane'])) $userlevel= $_SESSION['grane'];
    if( isset($_SESSION['userPoint'])) $userpoint= $_SESSION['userPoint'];
 
?>
<!-- ��� ������ �ΰ��� ȸ������/�α��� ǥ�� ���� -->

        <div class="popPage_top">
            <!-- 1.��� ������ �׺���̼� �޴� ���� -->
            <div class="">
                <a href="../index.php">
                    <img src="https://cdn-icons-png.flaticon.com/512/5525/5525279.png" alt="home">
                </a>
                
            </div>
            
            <!-- 2. �ΰ����� -->
            <div class="">
                <img src="https://i.ibb.co/V3Y54Rm/logo2.png" alt="BaAB">
            </div>

        </div>

        