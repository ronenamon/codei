
    <div id="container">
        <h1>Movies List</h1>

        <div id="body">
            <table id="table_id" class="display">
                <thead>
                <tr>
                    <th>Column 1</th>
                    <th>Column 2</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>
                </tr>
                <tr>
                    <td>Row 2 Data 1</td>
                    <td>Row 2 Data 2</td>
                </tr>
                </tbody>
            </table>
        </div>


        <script>

            $(document).ready( function () {

                $('#table_id').DataTable( {
                    "ajax": {
                        "serverSide": true,
                        "data": {t:'test'},
                        "url": '../index.php/Movies/getallmovies',
                        "type": "GET"
                    }



                } );
            } );
        </script>