<?



require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';

// Read in a page
$html = scraperwiki::scrape("http://foo.com");

// Find something on the page using css selectors
$dom = new simple_html_dom();
$dom->load($html);
print_r($dom->find("table.list"));

// Write out to the sqlite database using scraperwiki library
scraperwiki::save_sqlite(array('name'), array('name' => 'susan', 'occupation' => 'software developer'));

// An arbitrary query against the database
scraperwiki::select("* from data where 'name'='peter'");

echo"llllllll";


?>
