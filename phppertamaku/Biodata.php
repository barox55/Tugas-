<?php 
    $Nama = "Achmad Mubarok";
    $NIM = "202520032";
    $Alamat = "Loano";
    $Email = "achmadmubarok252@gmail.com";
    $BidangMinat = "Pemrograman Web";
    ?>
    <table>
    <tr>
        <td><?php echo "Nama";?></td>
        <td><?php echo ":"; ?></td>
        <td><?php echo $Nama ?></td>
        <td rowspan="9">
        <img src="A.JPG" width="130" height="200">
        </td>
    </tr>
    <tr>
        <td><?php echo "NIM"; ?></td>
        <td><?php echo ":"; ?></td>
        <td><?php echo $NIM ;?></td>
    </tr>
    <tr>
        <td><?php echo "Alamat"; ?></td>
        <td><?php echo ":"; ?></td>
        <td><?php echo $Alamat ;?></td>
    </tr>
    <tr>
        <td><?php echo "Email"; ?></td>
        <td><?php echo ":"; ?></td>
        <td><?php echo $Email ;?></td>
    </tr>
    <tr>
        <td><?php echo "Bidang Keminatan"; ?></td>
        <td><?php echo ":"; ?></td>
        <td><?php echo $BidangMinat ;?></td>
    </tr>
    </table>
