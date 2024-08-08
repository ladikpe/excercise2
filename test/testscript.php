<?php
use PHPUnit\Framework\TestCase;

class WebAppTest extends TestCase
{
    public function testHomePage()
    {
        $url = 'http://localhost'; // or your web application URL
        $response = file_get_contents($url);
        
        // Check if the page contains a specific string
        $this->assertStringContainsString('Welcome', $response);
    }
}
