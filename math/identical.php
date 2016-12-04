          
        <form name="form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return checkMatrix()">
            <table>
                <tr>
                    <td>
                        <label>Enter the number of rows for matrix :</label>
                    </td>
                    <td>
                        <input type="text" name="row" id="row" value="<?php echo isset($_POST['row']) ? $_POST['row'] : '' ;?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Enter the number of columns for matrix :</label>
                    </td>
                    <td>
                        <input type="text" name="col" id="col" value="<?php echo isset($_POST['col']) ? $_POST['col'] : '' ;?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="button" name="create" value="Create Matrix" onclick="createMatrix()">
                    </td>
                </tr>
            </table>
            <div id="matrixA">
            </div>
            
            <input type="submit" name="submit" value="submit" >
            <div id="matrixR">                
            </div>
            <script>
                function createMatrix() {
                    var row = document.getElementById('row').value;
                    var col = document.getElementById('col').value;
                    var row2 = document.getElementById('row2').value;
                    var col2 = document.getElementById('col2').value;
                    var i , j ,c,d,k,m,n;
                    if (row == '') {
                        alert('Please Enter Number Of Rows!');
                        return false;
                    }
                    if (col == '') {
                        alert('Please Enter Number Of Columns !');
                        return false;
                    }
                    if(row!=col){
                        alert('Matrix cannot be evaluated');
                        return false;
                    }
                    else{
                        var amatrix = new Array();

                        var htmlA = 'Enter the element of first matrix :';
                        htmlA += '<table>';

                        for (c = 0; c < row; c++) {
                            amatrix[c] = new Array();

                            htmlA += '<tr>';
                            for (d = 0; d < col; d++) {
                                htmlA += '<td>';
                                htmlA += '<input type="text" name="amatrix[' + row + '][' + col + ']">';
                                htmlA += '</td>';
                            }
                            htmlA += '</tr>';
                        }
                        htmlA += '</table>';
                        document.getElementById('matrixA').innerHTML = htmlA;
                        var bmatrix = new Array();

                        var htmlB = 'Enter the element of first matrix :';
                        htmlB += '<table>';
                        for (m = 0; m < row2; m++) {
                            bmatrix[m] = new Array();
                            htmlB += '<tr>';
                            for (n = 0; n < col2; n++) {
                                htmlB += '<td>';
                                htmlB += '<input type="text" name="bmatrix[' + m + '][' + n + ']">';
                                htmlB += '</td>';
                            }
                            htmlB += '</tr>';
                        }
                        htmlB += '</table>';
                        document.getElementById('matrixB').innerHTML = htmlB;
                    }
                }
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
                }
            </script>
            <?php
                if (@$_POST['submit'] === 'submit') {
                   
                    $amatrix = $_POST['amatrix'];
                    $row = $_POST['row'];
                    $col=$_POST['col'];
                    $flag = 0;
                    if (!is_array($amatrix)) {
                        echo "Please Create Matrix First by Clicking on Create Matrix!";
                        exit;
                    }
                    for($c = 0;$c < $row;$c++){
                        for($d = 0;$d < $col; $d++){
                            if(($c == $d && $amatrix[$c][$d] != 1) || ($c != $d && $amatrix[$c][$d] != 0)){
                                $flag = 0;
                                break;
                             }
                        }
                    }
                }
            ?>
        </form>    
    </div>
   
</body>
</html>