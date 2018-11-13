<h2>LIST DATA DOSEN</h2>

<table border=1px>
        <thead>
             <tr>    
               <th>NIP&nbsp;</th> 
               <th>Nama Dosen&nbsp;</th> 
               <th>Mata Kuliah</th>
             </tr>
        </thead>

<?php
   foreach ($db_siak as $key ) {
   echo "<tr>" ;
   echo "<td> $key->nip </td>" ;
   echo "<td> $key->nama </td>" ;  
   echo "<td> $key->matkul </td>" ;  
?>
   <!DOCTYPE html>
      <html>
        <head>
             <title></title>
        </head>
        
        <body>
             <td>
                <a href="<?php echo site_url('C_Dosen/fedit/'.($key->id_dosen)); ?>" class="edit">Edit</a>
                <a href="<?php echo site_url('C_Dosen/hapus/'.($key->id_dosen)); ?>" class="delete" >Delete</a>
            </td>
        </body>
      </html>
         <?php
             echo "</tr>" ;
                  }
          ?>
            
           <a href="<?php echo site_url('C_Dosen/insert')?>" class="add">Add</a>
                    
        </tbody>
</table>