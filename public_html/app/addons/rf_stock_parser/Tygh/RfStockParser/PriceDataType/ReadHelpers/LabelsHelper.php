<?php

namespace Tygh\RfStockParser\PriceDataType\ReadHelpers;

use Tygh\RfStockParser\Exceptions\LabelsWrong;

class LabelsHelper
{
    /**
     * @throws LabelsWrong
     */
    public function checkLabels(int $parserId, array $labels, bool $stop): bool
    {
        $labels = implode('|', $labels);

        $oldLabels = db_get_field(
            '
                SELECT value
                FROM ?:rf_stock_parser_artefacts
                WHERE parser_id = ?i AND name = ?s',
            $parserId,
            'labels'
        );

        if ($labels !== $oldLabels) {
            if ($stop) {
                throw new LabelsWrong();
            }
            db_query(
                '
                    INSERT INTO ?:rf_stock_parser_artefacts (parser_id, name, value)
                    VALUES (?i, "labels", ?s)
                    ON DUPLICATE KEY UPDATE value = VALUES(value)',
                $parserId,
                $labels
            );
        }

        return true;
    }
}
