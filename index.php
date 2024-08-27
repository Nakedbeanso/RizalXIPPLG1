<?php 

include('template/header.php');

$student = [
    [
        "nama" => "Agung Jebred",
        "kelas" => "XI",
        "jurusan" => "HR",
        "umur" => "17",
        "status" => "KABUR"
    ],
    [
        "nama" => "Asep Sukimak",
        "kelas" => "X",
        "jurusan" => "HR",
        "umur" => "16",
        "status" => "IZIN"
    ],
    [
        "nama" => "Abenk Gunaman",
        "kelas" => "XI",
        "jurusan" => "TKR",
        "umur" => "17",
        "status" => "DISPEN"
    ]
    ];

$number = 1;

?>










<!-- main content start -->
 <div class="main-content">
            <div class="col-xxl-12">
                <div class="panel">
                    <div class="panel-header">
                        <h5>Recent Orders</h5>
                        <div id="tableSearch"></div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-dashed recent-order-table" id="myTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Jurusan</th>
                                    <th>Umur</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <!-- foreach metode -->
                            <?php foreach($student as $studentss) : ?>
                                <tr>
                                    <td><?= $number++ ?></td>
                                    <?php foreach($studentss as $s => $row) : ?>
                                        <td><?= $row; ?></td>
                                    <?php endforeach; ?>
                                    <td>
                                        <div class="btn-box">
                                            <button><i class="fa-light fa-eye"></i></button>
                                            <button><i class="fa-light fa-pen"></i></button>
                                            <button><i class="fa-light fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="table-bottom-control"></div>
                    </div>
                </div>
            </div>
        </div>

<?php include('template/footer.php')?>
