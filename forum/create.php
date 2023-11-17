<!-- Create Post - Creates a forum post -->
<?php 
require($_SERVER['DOCUMENT_ROOT'] . "/functions/functions.php");
update_session();
$pageTitle = "Create Post";

$errors = $_SERVER['REQUEST_METHOD'] == "POST" ? create_post($_POST) : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/includes/head.php"); ?>
</head>
<body>
    <header>
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); ?>
        <h2><?= isset($pageTitle) ? $pageTitle : "Page Header" ?></h2>
        <h2 style="color: red">THIS PAGE DOES NOT CURRENTLY WORK</h3>
    </header>
    <main>
        <div>
            <?php display_errors($errors); ?>
        </div>
        <form method="post">
            <p>Title: <input type="text" name="title"></p>
            <p>Content: <textarea name="content" rows="5" cols="40"></textarea></p>
            <input type="submit" value="Submit">
        </form>
    </main>
    <footer>
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"); ?>
    </footer>
</body>
</html>

<?php 
// function create_post($data) {
//     $errors = array();

//     if(empty($data['title'])) {
//         $errors[] = "Please enter a post title.";
//     }
//     if(empty($data['content'])) {
//         $errors[] = "Please enter content for the post.";
//     }

//     if (count($errors) == 0) {
//         $values['PostID'] = rand(100, 999);
//         $values['Title'] = $data['title'];
//         $values['Content'] = $data['content'];
//         $values['UserID'] = $_SESSION['USER']->UserID;
//         $values['Created'] = get_local_time();

//         $query = "INSERT INTO POST_T (PostID, Title, Content, UserID, Created) VALUES (:PostID, :Title, :Content, :UserID, :Created);";
//         run_database($query, $values);

//         header("Location: posts/{$values['PostID']}.php");
//     }

//     return $errors;
// }
?>