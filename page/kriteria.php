<!-- judul -->
<div class="panel">
    <div class="panel-middle" id="judul">
        <img src="asset/image/kriteria.svg">
        <div id="judul-text">
            <h2 class="text-green">KRITERIA</h2>
        </div>
    </div>
</div>
<!-- judul -->
<div class="row">
    <div class="col-12">
        <div class="panel">
            <div class="panel-top">
                <b class="text-green">Daftar Kriteria</b>
            </div>
            <div class="panel-middle">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Kriteria</th>
                                <th>Sifat</th>
                                <th>Nilai Kriteria</th>
                                <th>Bobot</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM kriteria";
                            $execute = $konek->query($query);
                            if ($execute->num_rows > 0) {
                                while ($data = $execute->fetch_array(MYSQLI_ASSOC)) {
                            ?>
                                    <tr id='data'>
                                        <td><?php echo $data['namaKriteria']; ?></td>
                                        <td><?php echo $data['sifat']; ?></td>
                                        <td>
                                            <?php

                                            $id_kriteria = $data['id_kriteria'];
                                            $query3 = "SELECT * FROM nilai_kriteria where id_kriteria = $id_kriteria";
                                            $execute3 = $konek->query($query3);

                                            while ($data3 = $execute3->fetch_array(MYSQLI_ASSOC)) {

                                                echo "" . $data3['nilai'] . " : " . $data3['keterangan'] . "<br>";
                                            }

                                            ?>
                                        </td>
                                        <td>
                                            <?php

                                            $id_kriteria = $data['id_kriteria'];
                                            $query2 = "SELECT * FROM bobot_kriteria where id_kriteria = $id_kriteria";
                                            $execute2 = $konek->query($query2);

                                            $data2 = $execute2->fetch_array(MYSQLI_ASSOC);

                                            echo $data2['bobot'];

                                            ?>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo "<tr><td  class='text-center text-green' colspan='4'><b>Kosong</b></td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class=" panel-bottom">
            </div>
        </div>
    </div>
</div>