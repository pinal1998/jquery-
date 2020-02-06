

<html>
    <body>
        <script src="3.4.1.js" type="text/javascript"></script>

        <script src="jquery.dataTables.js" type="text/javascript"></script>
        <link href="jquery.dataTables.css" rel="stylesheet" type="text/css"/>
        <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script>

            $(document).ready(function () {
                $('#myTable').DataTable();
            });
        </script>


        <table id="myTable">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Mobile</td>
                </tr>


            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Vihan</td>
                    <td>9806234576</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>krupa</td>
                    <td>7689546790</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>shivansh</td>
                    <td>8906789056</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>jay</td>
                    <td>9806234576</td>
                </tr>

            </tbody>
        </table>
    </body>
</html>
