 $i, true);

    // Add page breaks every 10 rows
    if ($i % 10 == 0) {
        // Add a page break
        $spreadsheet->getActiveSheet()->setBreak('A' . $i, Worksheet::BREAK_ROW);
    }
}

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$spreadsheet->setActiveSheetIndex(0);
$spreadsheet->getActiveSheet()->setTitle('Printing Options');

// Set print headers
$spreadsheet->getActiveSheet()
    ->getHeaderFooter()->setOddHeader('&C&24&K0000FF&B&U&A');
$spreadsheet->getActiveSheet()
    ->getHeaderFooter()->setEvenHeader('&C&24&K0000FF&B&U&A');

// Set print footers
$spreadsheet->getActiveSheet()
    ->getHeaderFooter()->setOddFooter('&R&D &T&C&F&LPage &P / &N');
$spreadsheet->getActiveSheet()
    ->getHeaderFooter()->setEvenFooter('&L&D &T&C&F&RPage &P / &N');

// Save
$helper->write($spreadsheet, __FILE__);
