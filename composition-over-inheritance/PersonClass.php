<?php
/* This is just a very simple example showing how an abstract class can benefit the coder.
 * Here the DocumentHandler class doesn't have to care about which type of Document ( e.g PDF or DOCX )
 * it's actually handling. But it does know which methods can be called ( polymorphism )
 */
abstract class Document
{
    protected $author;
    protected $title;

    public function __construct( $documents_details_array  ) 
	{
		extract( $documents_details_array );

		$this->author = $author;

		$this->title = $title;
    }

    	abstract public function render( );
	

    	public function get_author( ) 
	{
      	 	return $this->author;
    	}

	
	public function get_title( ) 
	{
      	 	return $this->title;
    	}
	
}


class PdfDocument extends Document 
{
	public function	_construct()
	{
		parent:: _construct();
	}

    	public function render( ) 
	{
        	// Write code to render PDF docs here. I m just echoing some related text
			echo "Additionally a PDF document has been rendered as uniquely described in the PdfDocument class and render() method!";
    	}
}


class DocxDocument extends Document 
{
	public function	_construct()
	{
		parent:: _construct();
	}

    public function render( ) 
	{
    	// Write code to render PDF docs here. I m just echoing some related text
		echo "Additionally a DOCX document has been rendered as uniquely described in the DocxDocument class and render() 	method!";		

    }
}


class DocumentHandler 
{

    public function handle( Document $document ) 
	{
    	echo 'Handling proccess in document handler started : '.'<br>'.'Author\'s name has been read as : '. $document->get_author( ) .'.<br>';
		echo 'Book\'s title has been read as : ' . $document->get_title( ) . '.';
		echo "<br>";
        	return $document->render( );
    }
}

//Now you can use it accordingly

//Create an array with Documents details 
$documents_details_array = array();

$documents_details_array = [
							'author' => "James Joyce",
							'title'  => "Finnegan's Wake"
			  				];

//Create a Document object passing author and title as an array of arguments

$document = new PdfDocument($documents_details_array );

//Create a the DocumentHandler object 
$DocumentHandler = new DocumentHandler();

//Call a DocumentHandler's method eg handle 
$DocumentHandler->handle( $document);

?>