<?php

  $pdf = new Pdf_report('P', 'mm', 'A4', true, 'UTF-8', false);
  $pdf->SetTitle('Formulir');
  $pdf->SetHeaderMargin(30);
  $pdf->SetTopMargin(20);
  $pdf->setFooterMargin(20);
  // $pdf->SetAutoPageBreak(true);
  $pdf->SetAuthor('Author');
  $pdf->SetDisplayMode('real', 'default');
  $pdf->AddPage();
  // $i=0;

  // set auto page breaks
  $pdf->SetAutoPageBreak(TRUE, "26");
  $pdf->SetFont('times', '', 12, '', 'false');


  foreach ($data_pribadi as $row) {
    // die(base_url());
    $html='
      <table cellspacing="" cellpadding="3">
        <tr bgcolor="#ffffff">
          <td width="25%"><img src="/pgw_regis/assets/Logo Gema Insani - Horizontal.png"></td>
          <td width="50%" align="center"></td>
          <td width="25%"><img src="/pgw_regis/foto_pgw/foto/'.$row->pc_foto.'"></td>
        </tr>	
        <tr bgcolor="#ffffff">
          <td width="50%" align="center"></td>
        </tr>
        <tr bgcolor="#ffffff">
          <td width="50%" align="left">'.$row->pc_nama.'</td>
        </tr>
        <tr bgcolor="#ffffff">
          <td width="50%" align="center"></td>
        </tr>
        </tr>
      </table>

      
      ';
      // die($html);
      // die(print_r($row->pc_foto));
  };

    // foreach ($data_keluarga as $row) {
    //   // die(base_url());
    //   $html='
    //     <table cellspacing="" cellpadding="3">
    //         <td width="50%" align="left">'.$row->pf_nama.'</td>
    //       </tr>
    //       <tr bgcolor="#ffffff">
    //         <td width="50%" align="center"></td>
    //       </tr>
    //       </tr>
    //     </table>
  
    //     ';
    //     // die($html);
    //     // die(print_r($row->pc_foto));
    // }
    

  $pdf->writeHTML($html, true, false, true, false, '');
  // $pdf->Output('hasil.pdf', 'I');
  $pdf->Output($row->pc_nama.'.pdf', 'I');

?>
