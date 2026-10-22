<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class StudentContactSubmissionTest extends TestCase
{
    use RefreshDatabase;

    public function test_contact_submission_is_saved_when_optional_message_is_empty(): void
    {
        Http::fake([
            'https://www.google.com/recaptcha/api/siteverify' => Http::response(['success' => true]),
        ]);

        $response = $this->from('/contact-us')->post(route('studentContact.store'), [
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'company_name' => 'A Company Name Longer Than Twenty Characters',
            'g-recaptcha-response' => 'valid-token',
        ]);

        $response->assertRedirect('/contact-us');
        $response->assertSessionHas('success');
        $this->assertDatabaseHas('student_contacts', [
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'company_name' => 'A Company Name Longer Than Twenty Characters',
            'message' => '',
            'status' => 'pending',
        ]);
    }
}
