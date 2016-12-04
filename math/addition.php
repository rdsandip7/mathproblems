<div class="wrapper style2">
    <section class="container">
        <form name="form1" action="" method="post" >
            
                        <label>Enter the number of rows for matrix :</label>
                    
                        <input type="text" name="row" id="row" value="<?php echo isset($_POST['row']) ? $_POST['row'] : '' ;?>">
                    
                        <label>Enter the number of columns for matrix :</label>
                    
                        <input type="text" name="col" id="col" value="<?php echo isset($_POST['col']) ? $_POST['col'] : '' ;?>">
                    
                        <input type="button" name="create" value="Create Matrix" onclick="createMatrix()">
                  
            <div id="matrixA">
            </div>
            <div id="matrixB">
            </div>
            <input type="submit" name="submit" value="submit" class="submit">
            <div class="create">
            <script>

                function createMatrix() {

                    var row = document.getElementById('row').value;
                    var col = document.getElementById('col').value;
                    var i , j , m , n;
                    if (row == '') {
                        alert('Please Enter Number Of Rows!');
                        return false;
                    }
                    if (col == '') {
                        alert('Please Enter Number Of Columns !');
                        return false;
                    }
                    
                
                        var amatrix = new Array();
                        '<div class="col-md-12">'
                        var htmlA = 'Enter the A matrix :';
                        '</div>'
                        htmlA += '<div class="col-md-12">';

                        for (i = 0; i < row; i++) {
                            amatrix[i] = new Array();
                            
                            htmlA += '<div class="col-md-12">';
                            for (j = 0; j < col; j++) {
                                htmlA += '<div class="col-md-6">';
                                htmlA += '<input type="text" name="amatrix[' + i + '][' + j + ']">  ';
                                htmlA += '</div>';
                            }
                           
                            htmlA += '</div>';
                        }
                        htmlA += '</div>';
                        document.getElementById('matrixA').innerHTML = htmlA;
                    
                        var bmatrix = new Array();
                        var htmlB = 'Enter the B matrix :';
                        htmlB += '<div class="col-md-12 ">';
                        for (i = 0; i < row; i++) {
                            bmatrix[i] = new Array();
                            htmlB += '<div class="col-md-12">';
                            for (j = 0; j < col; j++) {
                                htmlB += '<div class="col-md-6">';
                                htmlB += '<input type="text" name="bmatrix[' + i + '][' + j + ']">';
                                htmlB += '</div>';
                            }
                            htmlB += '</div>';
                        }
                        htmlB += '</div>';
                        document.getElementById('matrixB').innerHTML = htmlB;

                }
                </script>
                </div>
                <script>
                $('.submit').on('submit',function(e){
                                e.preventDefault();
                                $('.create').show();
                            });
               </script>
                <script>
                function checkMatrix() {
                    var row = document.getElementById('row').value;
                    var col = document.getElementById('col').value;

                    if (row == '' || col == '') {
                        alert('Please Create Matrix First!');
                        return false;
                    }
                    else {
                        return true;
                    }
                }

            </script>
        </form>
        <?php
            if (@$_POST['submit'] === 'submit') {
            $amatrix = $_POST['amatrix'];
            $bmatrix = $_POST['bmatrix'];
            $row = $_POST['row'];
            $col=$_POST['col'];
            if (!is_array($amatrix) && !is_array($bmatrix)) {
                echo "Please Create Matrix First by Clicking on Create Matrix!";
                exit;
            }
            echo '<div class="col-md-4">';
            echo '<div class="row">';
            echo '<p>The resultant matrix is :</p>';
            
            for ($m = 0; $m < $row; $m++) {
                echo '<div class="box col-md-6" >';
                for ($n = 0; $n < $col; $n++) {
                    $cmatrix[$m][$n] = $amatrix[$m][$n] + $bmatrix[$m][$n];
                    echo '<h2>';
                    print_r($cmatrix[$m][$n]);
                    echo '</h2>';
                }
                echo '</div>';
            }
            echo '</div>';
            echo '</div>';
            }
        ?>
    </section>
</div>