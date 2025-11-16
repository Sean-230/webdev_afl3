# Download placeholder images for ice cream products
$outputDir = "c:\Users\seant\Herd\webdev_afl3\public\images\products"

# Create directory if it doesn't exist
if (-not (Test-Path $outputDir)) {
    New-Item -ItemType Directory -Path $outputDir -Force
}

Write-Host "Downloading placeholder images for 39 products..." -ForegroundColor Green

# Using picsum.photos for random images (500x500)
for ($i = 1; $i -le 39; $i++) {
    $outputFile = Join-Path $outputDir "$i.jpg"
    
    # Use different seed numbers for variety
    $seed = 1000 + $i
    $url = "https://picsum.photos/seed/$seed/500/500"
    
    try {
        Invoke-WebRequest -Uri $url -OutFile $outputFile -ErrorAction Stop
        Write-Host "Downloaded: $i.jpg" -ForegroundColor Cyan
        Start-Sleep -Milliseconds 200  # Small delay to avoid rate limiting
    } catch {
        Write-Host "Failed to download: $i.jpg - $($_.Exception.Message)" -ForegroundColor Red
    }
}

Write-Host "`nAll images downloaded successfully!" -ForegroundColor Green
Write-Host "Images are saved in: $outputDir" -ForegroundColor Yellow
