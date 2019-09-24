<?php
            // $pdf = new Pdf('L', 'mm', 'A4');
            $pdf = new Pdf('P','mm','A4');
            $pdf->SetTitle('Kartu Pendaftaran');
            $pdf->SetHeaderMargin(30);
            $pdf->SetTopMargin(20);
            $pdf->setFooterMargin(20);
            $pdf->SetAutoPageBreak(true);
            $pdf->SetAuthor('Author');
            $pdf->SetDisplayMode('real', 'default');
            $pdf->AddPage();
            $i=0;
            $html='
            <table>
            <tr>
            <td> </td>
            </tr>
            <tr>
                <td align="right" width="20%" valign="middle"><span></span> <br><img style="width:80px" src="assets/gambar/logo.jpeg"/></td>
             <td align="center" width="60%"><span style="font-size:10px" >Kartu Pemeriksaan Ibu Hamil</span><br>
                <span style="font-size:10px">Puskesmas Lohbener</span><br>
                <td align="left" width="20%" valign="middle"><span></span> <br><img style="width:100px" src="assets/gambar/darmaayu.png"/></td>
            </tr>
            <tr>
                <td align="center" width="100%">Kartu</td><br>
            </tr>
            <tr>
            <td>
            </td>
            </tr>
             </table>
                    <table cellspacing="2" bgcolor="#666666">
                        <tr bgcolor="#ffffff">
                            <th width="5%" align="center">No</th>
                            <th width="10%" align="center">Nis</th>
                            <th width="15%" align="center">Nama</th>
                         
                        </tr>';
            foreach ($ibu_hamil as $row) 
                {
                    $i++;
                    $html.='<tr bgcolor="#ffffff">
                            <td align="center">'.$i.'</td>
                            <td align="center">'.$row['kode_ibu'].'</td>
                            <td align="center">'.$row['nama_ibu'].'</td>
                            <td align="center">'.$row['nama_suami'].'</td>
          
                            
                        </tr>';
                }
                
            $html.='</table>';
            $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->Output('cetak_kartu.pdf', 'I');
?>