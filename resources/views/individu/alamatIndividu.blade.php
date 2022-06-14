<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <button class="btn btn-secondary" id="order">Open</button><br><br>
    <div  class="row-justify-content-center">
        <div style="background: orange; display:none;" class="col-md-10" id="appear">
            <div class="card">
                <div class="card-header">Alamat Individu</div>
                <div class="card-body">
                    <p>Daftar Alamat</p>
                    <form action="" method="post">
                        <table>
                            <tr>
                                <th>Alamat</th>
                                <td><textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control"></textarea></td>
                            </tr>
                            <tr>
                                <th>Poskod</th>
                                <td><input type="text" name="poskod" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Daerah</th>
                                <td><input type="text" name="daerah" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Negeri</th>
                                <td><select name="negeri" id="negeri" class="form-select">
                                    <option value="">Pilih Satu</option>
                                    <option value="PERAK DARUL RIDZUAN">PERAK DARUL RIDZUAN</option>
                                    <option value="SELANGOR DARUL EHSAN">SELANGOR DARUL EHSAN</option>
                                    <option value="PAHANG DARUL MAKMUR">PAHANG DARUL MAKMUR</option>
                                    <option value="KELANTAN DARUL NAIM">KELANTAN DARUL NAIM</option>
                                    <option value="JOHOR DARUL TAKZIM">JOHOR DARUL TAKZIM</option>
                                    <option value="KEDAH DARUL AMAN">KEDAH DARUL AMAN</option>
                                    <option value="W.P. LABUAN">W.P. LABUAN</option>
                                    <option value="MELAKA">MELAKA</option>
                                    <option value="NEGERI SEMBILAN DARUL KHUSUS">NEGERI SEMBILAN DARUL KHUSUS</option>
                                    <option value="PULAU PINANG">PULAU PINANG</option>
                                    <option value="PERLIS INDRA KAYANGAN">PERLIS INDRA KAYANGAN</option>
                                    <option value="SARAWAK">SARAWAK</option>
                                    <option value="TERENGGANU DARUL IMAN">TERENGGANU DARUL IMAN</option>
                                    <option value="SABAH">SABAH</option>
                                    <option value="W.P. KUALA LUMPUR">W.P. KUALA LUMPUR</option>
                                    <option value="W.P PUTRAJAYA">W.P. PUTRAJAYA</option>
                                </select></td>
                            </tr>
                            <tr>
                                <th>Jenis Alamat</th>
                                <td><select name="jenis_alamat" id="jenis_alamat" class="form-select">
                                        <option value="">Pilih satu</option>
                                        <option value="KEDIAMAN">Kediaman</option>
                                        <option value="PEJABAT">Pejabat</option>
                                    </select></td>
                            </tr>
                        </table>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <br><br>
                    <button id="close" class="btn btn-secondary">Close</button>
                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        $("#order").click(
            function()
            {
                $("#appear").show();
            }
        );

        $("#close").click(
            function()
            {
                $("#appear").hide();
            }
        );
    </script>
</body>
</html>
