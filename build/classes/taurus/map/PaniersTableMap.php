<?php



/**
 * This class defines the structure of the 'paniers' table.
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
class PaniersTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'taurus.map.PaniersTableMap';

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
        $this->setName('paniers');
        $this->setPhpName('Paniers');
        $this->setClassname('Paniers');
        $this->setPackage('taurus');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('idUSer', 'Iduser', 'INTEGER', true, null, null);
        $this->addPrimaryKey('idProduit', 'Idproduit', 'INTEGER', true, null, null);
        $this->addColumn('quantite', 'Quantite', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // PaniersTableMap
