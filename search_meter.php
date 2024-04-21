<?php
$conn = new mysqli('localhost', 'root', '', 'waterb_db');

if (!empty($_POST["keyword"])) {
    $sql = $conn->prepare("SELECT meterNum FROM tbl_meter WHERE meterNum LIKE ? ORDER BY meterNum LIMIT 0,6");
    $search = "{$_POST['keyword']}%";
    $sql->bind_param("s", $search);
    $sql->execute();
    $result = $sql->get_result();
    if (!empty($result)) {
        ?>
        <ul id="meter-list">
            <?php foreach ($result as $meter) { ?>
                <li onClick="selectMeter('<?php echo $meter["meterNum"]; ?>');">
                    <?php echo $meter["meterNum"]; ?>
                </li>
            <?php } ?>
        </ul>
        <?php
    }
}
?>
