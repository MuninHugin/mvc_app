<?php
/**
 * 
 */
class News
{
	
	public static function getNewsList()
	{
		$db = Db::getConnection();

		$newsList = array();

		$result = $db->query('SELECT * '
				. 'FROM news '
				. 'ORDER BY id ASC '
				. 'LIMIT 10');
		$i = 0;
		while($row = $result->fetch()){
			$newsList[$i]['id'] = $row['id'];
			$newsList[$i]['title'] = $row['title'];
			$newsList[$i]['date'] = $row['date'];
			$newsList[$i]['short_content'] = $row['short_content'];
			$newsList[$i]['content'] = $row['content'];
			$newsList[$i]['author_name'] = $row['author_name'];
			$newsList[$i]['preview'] = $row['preview'];
			$i++;
		}

		return $newsList;

	}

	public static function getNewsItemById($id)
	{
		$id = intval($id);
		if($id){
			
			$db = Db::getConnection();

			$result = $db->query('SELECT * from news WHERE id='.$id);
			$result->setFetchMode(PDO::FETCH_ASSOC);  //Для предотвращения дублирования и вывода массива по заголовкам полей таблицы

			$newsItem = $result->fetch();

			return $newsItem;
		}

	}

}
?>