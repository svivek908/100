    <!DOCTYPE html>  
    <html>  
    <head>  
        <title>Baby Form Add</title>  
    </head>  
    <body>  
        <center><form method="post" action="http://localhost/ci/index.php/baby_form/savingdata">  
            <table><b>REGISTRATION</b>  
                <tr>  
                    <td>Name:</td>  
                    <td>:</td>  
                    <td><input type="text" name="name" required></td>  
                </tr>  
                <tr>  
                    <td>Email:</td>  
                    <td>:</td>  
                    <td><input type="email" name="email" required></td>  
                </tr> 
                <tr>  
                    <td>Number:</td>  
                    <td>:</td>  
                    <td><input type="number" name="number" required></td>  
                </tr> 
                <tr>  
                    <td>City:</td>  
                    <td>:</td>  
                    <td><select name="city">
      <option value="">Select...</option>
      <option value="gwalior">gwalior</option>
      <option value="bhopal">bhopal</option>
    </select></td>  
                </tr> 
                <tr>  
                    <td>Gender:</td>  
                    <td>:</td>  
                    <td><input type="radio" name="gender" value="male">male
<input type="radio" name="gender" value="female">female<br></td>  
                </tr>  
                <tr>  
                    <td>Address:</td>  
                    <td>:</td>  
                    <td><textarea type="text" name="address" required></textarea></td>  
                </tr>     
                 <tr>  
                    <td>Language:</td>  
                    <td>:</td>  
                    <td><input type="checkbox" name="extra" value="php">php<br/>
</td>  
                </tr>
                <tr>  
                    <td>Qualification:</td>  
                    <td>:</td>  
                    <td><input type="text" name="qualification" required></td>  
                </tr>    
                <tr>  
                    <td><input type="submit" name="submit" value="Save"></td>  
                </tr>  
            </table>  
        </form>  </center>
    </body>  
    </html>  