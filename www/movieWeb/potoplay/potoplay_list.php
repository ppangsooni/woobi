
<?php
    include("../lib/dbconn.php");
    $mysqlboard = "SELECT * FROM potoplay_board order by potoplay_number desc";
    
    $result = $mysqlboardresult = mysqli_query( $conn, $mysqlboard );
    
    // $row = mysqli_fetch_array( $mysqlboardresult );

?>


<?php while($row = mysqli_fetch_assoc($result)){ ?>
<a href="potoplay_list_view_form.php?potoplay_number=<?php echo $row['potoplay_number']?>">

    <div class="potoplay_listWrap">
    
        <div class="potoplay_listImgWrap">
             
            <img class="potoplay_listImg" src="<?php echo $row['image'];?>" >
        </div>
        <div class="potoplay_listTitleWrap">
            <p><?php echo $row['potoplay_number'];?></p>
            <p class="">title:<?php echo $row['potoplay_title'];?></p>
        </div>
        <div class="potoplay_listTextWrap">
            <div class="potoplay_listText">
                
                <p><img src="https://i.ibb.co/Sfw1Kty/likeA.png" alt="���ƿ�"><?php echo $row['potoplay_like'];?></p>
                <p><span><?php echo $row['userId'];?> </span><br><span><?php echo  $row['potoplay_date'];?><</span></p>
            </div>

            <div class="potoplay_listLike">
                <div class="potoplay_listLikeBtn">
                    <img class="potoplay_listLikeBtn_Ch" src="https://i.ibb.co/TBnPDxS/likeB-1.png"  alt="���ƿ� ��ư">
                    <img class="potoplay_listLikeBtn_ChHover" src="https://i.ibb.co/zxtKQdk/likeBH-1.png"  alt="���ƿ� ��ư">
                </div>
            </div>
        </div>
    </div>
</a>
<?php } ?>