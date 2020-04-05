var files = <?php $out = array();
foreach (glob('img/stimuli/*.jpg') as $filename) {
    $p = pathinfo($filename);
    $out[] = $p['filename'];
}
echo json_encode($out); ?>;