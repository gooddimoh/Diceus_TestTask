<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<div class="ptable">
    <h1 class="headin">Standings</h1>
    <div class="tables">
    <table>

        <tr>
            <tr class="col">
                <th>Teams</th>
                <th>PTS</th>
                <th>P</th>
                <th>W</th>
                <th>D</th>
                <th>L</th>
                <th>GD</th>
            </tr>
            <tr class="wpos">
                <td>Warriors FC</td>
                <td>2</td>
                <td>2</td>
                <td>0</td>
                <td>0</td>
                <td>5</td>
                <td>6</td>
            </tr>
            <tr class="wpos">
                <td>YOLO FC</td>
                <td>2</td>
                <td>2</td>
                <td>0</td>
                <td>0</td>
                <td>4</td>
                <td>6</td>
            </tr>
            <tr class="wpos">
                <td>Majestic A</td>
                <td>2</td>
                <td>1</td>
                <td>1</td>
                <td>0</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr class="wpos">
                <td>Fenris</td>
                <td>2</td>
                <td>1</td>
                <td>1</td>
                <td>0</td>
                <td>1</td>
                <td>4</td>
            </tr>
        </tr>
        <tr>
            <td class="flex-1">
                <input type="button" value="Play All" name="Play All">
                <input type="button" value="Next Week" name="Next Week">
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <tr class="col">
                <th>Teams</th>
                <th>PTS</th>
                <th>P</th>
                <th>W</th>
                <th>D</th>
                <th>L</th>
                <th>GD</th>
            </tr>
            <tr class="wpos">
                <td>Warriors FC</td>
                <td>2</td>
                <td>2</td>
                <td>0</td>
                <td>0</td>
                <td>5</td>
                <td>6</td>
            </tr>
            <tr class="wpos">
                <td>YOLO FC</td>
                <td>2</td>
                <td>2</td>
                <td>0</td>
                <td>0</td>
                <td>4</td>
                <td>6</td>
            </tr>
            <tr class="wpos">
                <td>Majestic A</td>
                <td>2</td>
                <td>1</td>
                <td>1</td>
                <td>0</td>
                <td>4</td>
                <td>4</td>
            </tr>
            <tr class="wpos">
                <td>Fenris</td>
                <td>2</td>
                <td>1</td>
                <td>1</td>
                <td>0</td>
                <td>1</td>
                <td>4</td>
            </tr>
        </tr>
        <tr>
            <td class="flex-1">
                <input type="button" value="Play All" name="Play All">
                <input type="button" value="Next Week" name="Next Week">
            </td>
        </tr>
    </table>
    </div>
</div>
<style type="text/css">
    .tables {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        align-content: center;
    }
    .flex-1 {
        width: 100%;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-around;
        align-items: center;
        align-content: center;
    }
    * {
        font-family: Fjalla One;
        margin: 0;
        border: 0;
        padding: 0;
        color: white;
    }

    .ptable table {
        margin: 30px auto;
        border-collapse: collapse;
    }

    .ptable {
        margin: 0px 0% 30px 0%;
    }

    th, td {
        padding: 10px;
    }

    th {
        color: #000000;
    }

    .headin {
        text-align: center;
        text-decoration: none;
        color: #ffe221;
        margin: 30px;
        display: block;
    }

    .wpos {
        text-align: center;
    }

    .wpos td {
        color: #000000;
    }

    .pos {
        text-align: center;
    }

    .pos td {
        color: #ff7b21;
    }

    table .col {
        border-bottom: 1px solid #FFFFFF;
    }

    .wpos:hover {
        background-color: #77ff21;
    }

    .wpos:hover td {
        color: #000000;
    }

    .pos:hover {
        background-color: #ff7b21;
    }

    .pos:hover td {
        color: #000000;
    }
</style>
</body>
</html>
