<html>
    <head>
    <!-- Jacob Deepu Roll No. 29 -->
    <title>Most Popular Websites</title>
    <style>
        h1 {
            color: #1D2D50;
        }
        table {
            width: 100%;
            border: 0px;
        }
        th {
            border: 0px;
            padding: 20px;
            font-size: 20px;
            text-align: center;
            color: #FDFDFD;
            background-color: #354B64;
        }
        td {
            border: 0px;
            padding: 20px;
            font-size: 20px;
            color: #0F3057;
            background-color: #F2F2F2;
        }
    </style>
    </head>
    <body>
        <h1 align="center">Most Popular Websites</h1>
        <table align="center" border="1">
            <tr>
                <th>Rank</th>
                <th>Website Name</th>
                <th>Website Link</th>
            </tr>
            <?php
                $website['Google'] = "<a href='https://google.com'>google.com</a>";
                $website['YouTube'] = "<a href='https://youtube.com'>youtube.com</a>";
                $website['Facebook'] = "<a href='https://facebook.com'>facebook.com</a>";
                $website['Twitter'] = "<a href='https://twitter.com'>twitter.com</a>";
                $website['Instagram'] = "<a href='https://instagram.com'>instagram.com</a>";
                $website['Wikipedia'] = "<a href='https://wikipedia.org'>wikipedia.org</a>";
                $website['Yahoo'] = "<a href='https://yahoo.com'>yahoo.com</a>";
                $website['Amazone'] = "<a href='https://amazone.com'>amazone.com</a>";
                $website['Netflix'] = "<a href='https://netflix.com'>netflix.com</a>";
                $website['Reddit'] = "<a href='https://reddit.com'>reddit.com</a>";
                $rank = 1;
                foreach($website as $name => $link) {
                    echo "<tr>";
                    echo "<td style='text-align: center;'>", $rank, "</td>";
                    echo "<td>", $name, "</td>";
                    echo "<td>", $link, "</td>";
                    echo "</tr>";
                    $rank++;
                }
            ?>
        </table>
    </body>
</html>
