r database.
     *                                        A database is a list of related data in which rows of related
     *                                        information are records, and columns of data are fields. The
     *                                        first row of the list contains labels for each column.
     * @param int|string $field Indicates which column is used in the function. Enter the
     *                                        column label enclosed between double quotation marks, such as
     *                                        "Age" or "Yield," or a number (without quotation marks) that
     *                                        represents the position of the column within the list: 1 for
     *                                        the first column, 2 for the second column, and so on.
     * @param mixed[] $criteria The range of cells that contains the conditions you specify.
     *                                        You can use any range for the criteria argument, as long as it
     *                                        includes at least one column label and at least one cell below
     *                                        the column label in which you specify a condition for the
     *                                        column.
     *
     * @return mixed
     */
    public static function DGET($database, $field, $criteria)
    {
        $field = self::fieldExtract($database, $field);
        if ($field === null) {
            return null;
        }

        // Return
        $colData = self::getFilteredColumn($database, $field, $criteria);
        if (count($colData) > 1) {
            return Functions::NAN();
        }

        return $colData[0];
    }

    /**
     * DMAX.
     *
     * Returns the largest number in a column of a list or database that matches conditions you that
     * specify.
     *
     * Excel Function:
     *        DMAX(database,field,criteria)
     *
     * @category Database Functions
     *
     * @param mixed[] $database The range of cells that makes up the list or database.
     *                                        A database is a list of related data in which rows of related
     *                                        information are records, and columns of data are fields. The
     *                                        first row of the list contains labels for each column.
     * @param int|string $field Indicates which column is used in the function. Enter the
     *                                        column label enclosed between double quotation marks, such as
     *                                        "Age" or "Yield," or a number (without quotation marks) that
     *                                        represents the position of the column within the list: 1 for
     *                                        the first column, 2 for the second column, and so on.
     * @param mixed[] $criteria The range of cells that contains the conditions you specify.
     *                                        You can use any range for the criteria argument, as long as it
     *                                        includes at least one column label and at least one cell below
     *                                        the column label in which you specify a condition for the
     *                                        column.
     *
     * @return float
     */
    public static function DMAX($database, $field, $criteria)
    {
        $field = self::fieldExtract($database, $field);
        if ($field === null) {
            return null;
        }

        // Return
        return Statistical::MAX(
            self::getFilteredColumn($database, $field, $criteria)
        );
    }

    /**
     * DMIN.
     *
     * Returns the smallest number in a column of a list or database that matches conditions you that
     * specify.
     *
     * Excel Function:
     *        DMIN(database,field,criteria)
     *
     * @category Database Functions
     *
     * @param mixed[] $database The range of cells that makes up the list or database.
     *                                        A database is a list of related data in which rows of related
     *                                        information are records, and columns of data are fields. The
     *                                        first row of the list contains labels for each column.
     * @param int|string $field Indicates which column is used in the function. Enter the
     *                                        column label enclosed between double quotation marks, such as
     *                                        "Age" or "Yield," or a number (without quotation marks) that
     *                                        represents the position of the column within the list: 1 for
     *                                        the first column, 2 for the second column, and so on.
     * @param mixed[] $criteria The range of cells that contains the conditions you specify.
     *                                        You can use any range for the criteria argument, as long as it
     *                                        includes at least one column label and at least one cell below
     *                                        the column label in which you specify a condition for the
     *                                        column.
     *
     * @return float
     */
    public static function DMIN($database, $field, $criteria)
    {
        $field = self::fieldExtract($database, $field);
        if ($field === null) {
            return null;
        }

        // Return
        return Statistical::MIN(
            self::getFilteredColumn($database, $field, $criteria)
        );
    }

    /**
     * DPRODUCT.
     *
     * Multiplies the values in a column of a list or database that match conditions that you specify.
     *
     * Excel Function:
     *        DPRODUCT(database,field,criteria)
     *
     * @category Database Functions
     *
     * @param mixed[] $database The range of cells that makes up the list or database.
     *                                        A database is a list of related data in which rows of related
     *                                        information are records, and columns of data are fields. The
     *                                        first row of the list contains labels for each column.
     * @param int|string $field Indicates which column is used in the function. Enter the
     *                                        column label enclosed between double quotation marks, such as
     *                                        "Age" or "Yield," or a number (without quotation marks) that
     *                                        represents the position of the column within the list: 1 for
     *                                        the first column, 2 for the second column, and so on.
     * @param mixed[] $criteria The range of cells that contains the conditions you specify.
     *                                        You can use any range for the criteria argument, as long as it
     *                                        includes at least one column label and at least one cell below
     *                                        the column label in which you specify a condition for the
     *                                        column.
     *
     * @return float
     */
    public static function DPRODUCT($database, $field, $criteria)
    {
        $field = self::fieldExtract($database, $field);
        if ($field === null) {
            return null;
        }

        // Return
        return MathTrig::PRODUCT(
            self::getFilteredColumn($database, $field, $criteria)
        );
    }

    /**
     * DSTDEV.
     *
     * Estimates the standard deviation of a population based on a sample by using the numbers in a
     * column of a list or database that match conditions that you specify.
     *
     * Excel Function:
     *        DSTDEV(database,field,criteria)
     *
     * @category Database Functions
     *
     * @param mixed[] $database The range of cells that makes up the list or database.
     *                                        A database is a list of related data in which rows of related
     *                                        information are records, and columns of data are fields. The
     *                                        first row of the list contains labels for each column.
     * @param int|string $field Indicates which column is used in the function. Enter the
     *                                        column label enclosed between double quotation marks, such as
     *                                        "Age" or "Yield," or a number (without quotation marks) that
     *                                        represents the position of the column within the list: 1 for
     *                                        the first column, 2 for the second column, and so on.
     * @param mixed[] $criteria The range of cells that contains the conditions you specify.
     *                                        You can use any range for the criteria argument, as long as it
     *                                        includes at least one column label and at least one cell below
     *                                        the column label in which you specify a condition for the
     *                                        column.
     *
     * @return float
     */
    public static function DSTDEV($database, $field, $criteria)
    {
        $field = self::fieldExtract($database, $field);
        if ($field === null) {
            return null;
        }

        // Return
        return Statistical::STDEV(
            self::getFilteredColumn($database, $field, $criteria)
        );
    }

    /**
     * DSTDEVP.
     *
     * Calculates the standard deviation of a population based on the entire population by using the
     * numbers in a column of a list or database that match conditions that you specify.
     *
     * Excel Function:
     *        DSTDEVP(database,field,criteria)
     *
     * @category Database Functions
     *
     * @param mixed[] $database The range of cells that makes up the list or database.
     *                                        A database is a list of related data in which rows of related
     *                                        information are records, and columns of data are fields. The
     *                                        first row of the list contains labels for each column.
     * @param int|string $field Indicates which column is used in the function. Enter the
     *                                        column label enclosed between double quotation marks, such as
     *                                        "Age" or "Yield," or a number (without quotation marks) that
     *                                        represents the position of the column within the list: 1 for
     *                                        the first column, 2 for the second column, and so on.
     * @param mixed[] $criteria The range of cells that contains the conditions you specify.
     *                                        You can use any range for the criteria argument, as long as it
     *                                        includes at least one column label and at least one cell below
     *                                        the column label in which you specify a condition for the
     *                                        column.
     *
     * @return float
     */
    public static function DSTDEVP($database, $field, $criteria)
    {
        $field = self::fieldExtract($database, $field);
        if ($field === null) {
            return null;
        }

        // Return
        return Statistical::STDEVP(
            self::getFilteredColumn($database, $field, $criteria)
        );
    }

    /**
     * DSUM.
     *
     * Adds the numbers in a column of a list or database that match conditions that you specify.
     *
     * Excel Function:
     *        DSUM(database,field,criteria)
     *
     * @category Database Functions
     *
     * @param mixed[] $database The range of cells that makes up the list or database.
     *                                        A database is a list of related data in which rows of related
     *                                        information are records, and columns of data are fields. The
     *                                        first row of the list contains labels for each column.
     * @param int|string $field Indicates which column is used in the function. Enter the
     *                                        column label enclosed between double quotation marks, such as
     *                                        "Age" or "Yield," or a number (without quotation marks) that
     *                                        represents the position of the column within the list: 1 for
     *                                        the first column, 2 for the second column, and so on.
     * @param mixed[] $criteria The range of cells that contains the conditions you specify.
     *                                        You can use any range for the criteria argument, as long as it
     *                                        includes at least one column label and at least one cell below
     *                                        the column label in which you specify a condition for the
     *                                        column.
     *
     * @return float
     */
    public static function DSUM($database, $field, $criteria)
    {
        $field = self::fieldExtract($database, $field);
        if ($field === null) {
            return null;
        }

        // Return
        return MathTrig::SUM(
            self::getFilteredColumn($database, $field, $criteria)
        );
    }

    /**
     * DVAR.
     *
     * Estimates the variance of a population based on a sample by using the numbers in a column
     * of a list or database that match conditions that you specify.
     *
     * Excel Function:
     *        DVAR(database,field,criteria)
     *
     * @category Database Functions
     *
     * @param mixed[] $database The range of cells that makes up the list or database.
     *                                        A database is a list of related data in which rows of related
     *                                        information are records, and columns of data are fields. The
     *                                        first row of the list contains labels for each column.
     * @param int|string $field Indicates which column is used in the function. Enter the
     *                                        column label enclosed between double quotation marks, such as
     *                                        "Age" or "Yield," or a number (without quotation marks) that
     *                                        represents the position of the column within the list: 1 for
     *                                        the first column, 2 for the second column, and so on.
     * @param mixed[] $criteria The range of cells that contains the conditions you specify.
     *                                        You can use any range for the criteria argument, as long as it
     *                                        includes at least one column label and at least one cell below
     *                                        the column label in which you specify a condition for the
     *                                        column.
     *
     * @return float
     */
    public static function DVAR($database, $field, $criteria)
    {
        $field = self::fieldExtract($database, $field);
        if ($field === null) {
            return null;
        }

        // Return
        return Statistical::VARFunc(
            self::getFilteredColumn($database, $field, $criteria)
        );
    }

    /**
     * DVARP.
     *
     * Calculates the variance of a population based on the entire population by using the numbers
     * in a column of a list or database that match conditions that you specify.
     *
     * Excel Function:
     *        DVARP(database,field,criteria)
     *
     * @category Database Functions
     *
     * @param mixed[] $database The range of cells that makes up the list or database.
     *                                        A database is a list of related data in which rows of related
     *                                        information are records, and columns of data are fields. The
     *                                        first row of the list contains labels for each column.
     * @param int|string $field Indicates which column is used in the function. Enter the
     *                                        column label enclosed between double quotation marks, such as
     *                                        "Age" or "Yield," or a number (without quotation marks) that
     *                                        represents the position of the column within the list: 1 for
     *                                        the first column, 2 for the second column, and so on.
     * @param mixed[] $criteria The range of cells that contains the conditions you specify.
     *                                        You can use any range for the criteria argument, as long as it
     *                                        includes at least one column label and at least one cell below
     *                                        the column label in which you specify a condition for the
     *                                        column.
     *
     * @return float
     */
    public static function DVARP($database, $field, $criteria)
    {
        $field = self::fieldExtract($database, $field);
        if ($field === null) {
            return null;
        }

        // Return
        return Statistical::VARP(
            self::getFilteredColumn($database, $field, $criteria)
        );
    }
}
