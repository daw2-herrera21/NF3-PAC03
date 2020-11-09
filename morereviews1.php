<?php
$db = mysqli_connect(gethostname(), 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db( $db,'moviesite') or die(mysqli_error($db));


$query = <<<ENDSQL
INSERT INTO reviews
    (review_movie_id, review_date, reviewer_name, review_comment,
        review_rating)
VALUES 
    (4, "2003-10-15", "Manolo Lama", "No me gustó.", 4),
    (5, "2009-06-01", "Toni Herrera", "Pelicula aburrida.", 2),
    (6, "2020-11-12", "Henry Mendez", "Me gustó mucho la pelicula, muy entretenida.", 5)
ENDSQL;
mysqli_query( $db,$query) or die(mysqli_error($db));

echo 'Datos de reviewers actualizados';
?>
