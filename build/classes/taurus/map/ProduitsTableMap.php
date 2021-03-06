<?php



/**
 * This class defines the structure of the 'produits' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.taurus.map
 */
class ProduitsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'taurus.map.ProduitsTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('produits');
        $this->setPhpName('Produits');
        $this->setClassname('Produits');
        $this->setPackage('taurus');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('nom', 'Nom', 'VARCHAR', false, 255, null);
        $this->addColumn('prix', 'Prix', 'FLOAT', false, null, null);
        $this->addColumn('description', 'Description', 'LONGVARCHAR', false, null, null);
        $this->addColumn('documenation', 'Documenation', 'LONGVARCHAR', false, null, null);
        $this->addColumn('img', 'Img', 'VARCHAR', true, 255, null);
        $this->addColumn('idCateg', 'Idcateg', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // ProduitsTableMap
