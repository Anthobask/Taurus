<?php


/**
 * Base class that represents a query for the 'paniers' table.
 *
 *
 *
 * @method PaniersQuery orderByIduser($order = Criteria::ASC) Order by the idUSer column
 * @method PaniersQuery orderByIdproduit($order = Criteria::ASC) Order by the idProduit column
 * @method PaniersQuery orderByQuantite($order = Criteria::ASC) Order by the quantite column
 *
 * @method PaniersQuery groupByIduser() Group by the idUSer column
 * @method PaniersQuery groupByIdproduit() Group by the idProduit column
 * @method PaniersQuery groupByQuantite() Group by the quantite column
 *
 * @method PaniersQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PaniersQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PaniersQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Paniers findOne(PropelPDO $con = null) Return the first Paniers matching the query
 * @method Paniers findOneOrCreate(PropelPDO $con = null) Return the first Paniers matching the query, or a new Paniers object populated from the query conditions when no match is found
 *
 * @method Paniers findOneByIduser(int $idUSer) Return the first Paniers filtered by the idUSer column
 * @method Paniers findOneByIdproduit(int $idProduit) Return the first Paniers filtered by the idProduit column
 * @method Paniers findOneByQuantite(int $quantite) Return the first Paniers filtered by the quantite column
 *
 * @method array findByIduser(int $idUSer) Return Paniers objects filtered by the idUSer column
 * @method array findByIdproduit(int $idProduit) Return Paniers objects filtered by the idProduit column
 * @method array findByQuantite(int $quantite) Return Paniers objects filtered by the quantite column
 *
 * @package    propel.generator.taurus.om
 */
abstract class BasePaniersQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePaniersQuery object.
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
            $modelName = 'Paniers';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PaniersQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PaniersQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PaniersQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PaniersQuery) {
            return $criteria;
        }
        $query = new PaniersQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$idUSer, $idProduit]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Paniers|Paniers[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PaniersPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PaniersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Paniers A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idUSer`, `idProduit`, `quantite` FROM `paniers` WHERE `idUSer` = :p0 AND `idProduit` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Paniers();
            $obj->hydrate($row);
            PaniersPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return Paniers|Paniers[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Paniers[]|mixed the list of results, formatted by the current formatter
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
     * @return PaniersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(PaniersPeer::IDUSER, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(PaniersPeer::IDPRODUIT, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PaniersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(PaniersPeer::IDUSER, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(PaniersPeer::IDPRODUIT, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the idUSer column
     *
     * Example usage:
     * <code>
     * $query->filterByIduser(1234); // WHERE idUSer = 1234
     * $query->filterByIduser(array(12, 34)); // WHERE idUSer IN (12, 34)
     * $query->filterByIduser(array('min' => 12)); // WHERE idUSer >= 12
     * $query->filterByIduser(array('max' => 12)); // WHERE idUSer <= 12
     * </code>
     *
     * @param     mixed $iduser The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PaniersQuery The current query, for fluid interface
     */
    public function filterByIduser($iduser = null, $comparison = null)
    {
        if (is_array($iduser)) {
            $useMinMax = false;
            if (isset($iduser['min'])) {
                $this->addUsingAlias(PaniersPeer::IDUSER, $iduser['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iduser['max'])) {
                $this->addUsingAlias(PaniersPeer::IDUSER, $iduser['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PaniersPeer::IDUSER, $iduser, $comparison);
    }

    /**
     * Filter the query on the idProduit column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproduit(1234); // WHERE idProduit = 1234
     * $query->filterByIdproduit(array(12, 34)); // WHERE idProduit IN (12, 34)
     * $query->filterByIdproduit(array('min' => 12)); // WHERE idProduit >= 12
     * $query->filterByIdproduit(array('max' => 12)); // WHERE idProduit <= 12
     * </code>
     *
     * @param     mixed $idproduit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PaniersQuery The current query, for fluid interface
     */
    public function filterByIdproduit($idproduit = null, $comparison = null)
    {
        if (is_array($idproduit)) {
            $useMinMax = false;
            if (isset($idproduit['min'])) {
                $this->addUsingAlias(PaniersPeer::IDPRODUIT, $idproduit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproduit['max'])) {
                $this->addUsingAlias(PaniersPeer::IDPRODUIT, $idproduit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PaniersPeer::IDPRODUIT, $idproduit, $comparison);
    }

    /**
     * Filter the query on the quantite column
     *
     * Example usage:
     * <code>
     * $query->filterByQuantite(1234); // WHERE quantite = 1234
     * $query->filterByQuantite(array(12, 34)); // WHERE quantite IN (12, 34)
     * $query->filterByQuantite(array('min' => 12)); // WHERE quantite >= 12
     * $query->filterByQuantite(array('max' => 12)); // WHERE quantite <= 12
     * </code>
     *
     * @param     mixed $quantite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PaniersQuery The current query, for fluid interface
     */
    public function filterByQuantite($quantite = null, $comparison = null)
    {
        if (is_array($quantite)) {
            $useMinMax = false;
            if (isset($quantite['min'])) {
                $this->addUsingAlias(PaniersPeer::QUANTITE, $quantite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quantite['max'])) {
                $this->addUsingAlias(PaniersPeer::QUANTITE, $quantite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PaniersPeer::QUANTITE, $quantite, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Paniers $paniers Object to remove from the list of results
     *
     * @return PaniersQuery The current query, for fluid interface
     */
    public function prune($paniers = null)
    {
        if ($paniers) {
            $this->addCond('pruneCond0', $this->getAliasedColName(PaniersPeer::IDUSER), $paniers->getIduser(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(PaniersPeer::IDPRODUIT), $paniers->getIdproduit(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
