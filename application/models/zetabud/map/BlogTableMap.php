<?php



/**
 * This class defines the structure of the 'blog' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.zetabud.map
 */
class BlogTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'zetabud.map.BlogTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('blog');
		$this->setPhpName('Blog');
		$this->setClassname('Blog');
		$this->setPackage('zetabud');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('USER_ID', 'UserId', 'INTEGER', 'user', 'ID', true, null, null);
		$this->addColumn('TITLE', 'Title', 'VARCHAR', true, 255, null);
		$this->addColumn('TEXT', 'Text', 'LONGVARCHAR', true, null, null);
		$this->addColumn('CREATED_DATE', 'CreatedDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('MODIFIED_DATE', 'ModifiedDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('PUBLISHED_DATE', 'PublishedDate', 'TIMESTAMP', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('User', 'User', RelationMap::MANY_TO_ONE, array('user_id' => 'id', ), null, null);
	} // buildRelations()

} // BlogTableMap
