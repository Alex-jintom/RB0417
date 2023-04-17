// Tesseract OCR 라이브러리 경로 설정
$tesseract_path = 'C:/Program Files (x86)/Tesseract-OCR/tesseract.exe';

// 인식할 이미지 파일 경로 설정
$image_file = 'example.png';

// Tesseract OCR 인스턴스 생성
$tesseract = new TesseractOCR($image_file);
$tesseract->setTesseractPath($tesseract_path);

// OCR 수행
$text = $tesseract->recognize();

// 결과 출력
echo $text;
