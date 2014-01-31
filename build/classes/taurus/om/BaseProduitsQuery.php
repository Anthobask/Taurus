<?php


/**
 * Base class that represents a query for the 'produits' table.
 *
 *
 *
 * @method ProduitsQuery orderById($order = Criteria::ASC) Order by the id column
 * @method ProduitsQuery orderByNom($order = Criteria::ASC) Order by the nom column
 * @method ProduitsQuery orderByPrix($order = Criteria::ASC) Order by the prix column
 * @method ProduitsQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method ProduitsQuery orderByDocumenation($order = Criteria::ASC) Order by the documenation column
 *
 * @method ProduitsQuery groupById() Group by the id column
 * @method ProduitsQuery groupByNom() Group by the nom column
 * @method ProduitsQuery groupByPrix() Group by the prix column
 * @method ProduitsQuery groupByDescription() Group by the description column
 * @method ProduitsQuery groupByDocumenation() Group by the documenation column
 *
 * @method ProduitsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProduitsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProduitsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Produits findOne(PropelPDO $con = null) Return the first Produits matching the query
 * @method Produits findOneOrCreate(PropelPDO $con = null) Return the first Produits matching the query, or a new Produits object populated from the query conditions when no match is found
 *
 * @method Produits findOneByNom(string $nom) Return the first Produits filtered by the nom column
 * @method Produits findOneByPrix(double $prix) Return the first Produits filtered by the prix column
 * @method Produits findOneByDescription(string $description) Return the first Produits filtered by the description column
 * @method Produits findOneByDocumenation(string $documenation) Return the first Produits filtered by the documenation column
 *
 * @method array findById(int $id) Return Produits objects filtered by the id column
 * @method array findByNom(string $nom) Return Produits objects filtered by the nom column
 * @method array findByPrix(double $prix) Return Produits objects filtered by the prix column
 * @method array findByDescription(string $description) Return Produits objects filtered by the description column
 * @method array findByDocumenation(string $documenation) Return Produits objects filtered by the documenation column
 *
 * @package    propel.generator.taurus.om
 */
abstract class BaseProduitsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseProduitsQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'taurus';
        }
        if (null === $modelName) {
            $modelName = 'Produits';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProduitsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProduitsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProduitsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProduitsQuery) {
            return $criteria;
        }
        $query = new ProduitsQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Produits|Produits[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProduitsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProduitsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Produits A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Produits A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `nom`, `prix`, `description`, `documenation` FROM `produits` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Produits();
            $obj->hydrate($row);
            ProduitsPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Produits|Produits[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Produits[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return ProduitsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProduitsPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProduitsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProduitsPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProduitsQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(ProduitsPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(ProduitsPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProduitsPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the nom column
     *
     * Example usage:
     * <code>
     * $query->filterByNom('fooValue');   // WHERE nom = 'fooValue'
     * $query->filterByNom('%fooValue%'); // WHERE nom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProduitsQuery The current query, for fluid interface
     */
    public function filterByNom($nom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nom)) {
                $nom = str_replace('*', '%', $nom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProduitsPeer::NOM, $nom, $comparison);
    }

    /**
     * Filter the query on the prix column
     *
     * Example usage:
     * <code>
     * $query->filterByPrix(1234); // WHERE prix = 1234
     * $query->filterByPrix(array(12, 34)); // WHERE prix IN (12, 34)
     * $query->filterByPrix(array('min' => 12)); // WHERE prix >= 12
     * $query->filterByPrix(array('max' => 12)); // WHERE prix <= 12
     * </code>
     *
     * @param     mixed $prix The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProduitsQuery The current query, for fluid interface
     */
    public function filterByPrix($prix = null, $comparison = null)
    {
        if (is_array($prix)) {
            $useMinMax = false;
            if (isset($prix['min'])) {
                $this->addUsingAlias(ProduitsPeer::PRIX, $prix['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prix['max'])) {
                $this->addUsingAlias(ProduitsPeer::PRIX, $prix['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProduitsPeer::PRIX, $prix, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%'); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProduitsQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $description)) {
                $description = str_replace('*', '%', $description);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProduitsPeer::DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the documenation column
     *
     * Example usage:
     * <code>
     * $query->filterByDocumenation('fooValue');   // WHERE documenation = 'fooValue'
     * $query->filterByDocumenation('%fooValue%'); // WHERE documenation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $documenation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProduitsQuery The current query, for fluid interface
     */
    public function filterByDocumenation($documenation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($documenation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $documenation)) {
                $documenation = str_replace('*', '%', $documenation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProduitsPeer::DOCUMENATION, $documenation, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Produits $produits Object to remove from the list of results
     *
     * @return ProduitsQuery The current query, for fluid interface
     */
    public function prune($produits = null)
    {
        if ($produits) {
            $this->addUsingAlias(ProduitsPeer::ID, $produits->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
