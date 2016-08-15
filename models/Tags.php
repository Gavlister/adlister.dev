<?php  
require_once __DIR__ . '/Model.php';

class Tags extends Model
{
    protected static $table = "tags";
    public function searchTag()
    {
        $name = Input::get('tag');
        $searchTag = <<<SEARCHTAG
        SELECT i.name
        FROM items as i
        JOIN item_tags AS it
        ON it.item_id = i.id
        JOIN tags as t
        ON t.id = it.tag_id
        WHERE t.name LIKE "%$tag%"; 
SEARCHTAG;
        return $searchTag;
    }

    public static function showTags($itemId)
    {
        $query = <<<QUERY
        SELECT * FROM tags as t
        JOIN items_tags AS it
        ON it.tag_id = t.id
        WHERE it.item_id = :id
QUERY;
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':id', $itemId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
?>