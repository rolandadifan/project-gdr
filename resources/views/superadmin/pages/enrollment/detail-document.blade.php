<section id="doc-photo" class="mt-5">
    @isset($enrollment->user->userDetail->userDocument->photo_passport)
    <tr>
        <td>Photo Passport</td>
        <td>
             <a href="{{ Storage::url($enrollment->user->userDetail->userDocument->photo_passport) }}">Download</a >
        </td>
    </tr><br>
    @endisset
    @isset($enrollment->user->userDetail->userDocument->photo_formal)
         <tr>
        <td>Photo Formal</td>
        <td>
             <a  href="{{ Storage::url($enrollment->user->userDetail->userDocument->photo_formal) }}">Download</a >
        </td>
    </tr><br>
    @endisset
    @isset($enrollment->user->userDetail->userDocument->statment_letter)
        <tr>
        <td>Statment Letter</td>
        <td>
             <a  href="{{ Storage::url($enrollment->user->userDetail->userDocument->statment_letter) }}">Download</a >
        </td>
    </tr><br>
    @endisset
    @isset($enrollment->user->userDetail->userDocument->photo_cover_passport)
        <tr>
        <td>Photo Cover Passport</td>
        <td>
             <a  href="{{ Storage::url($enrollment->user->userDetail->userDocument->photo_cover_passport) }}">Download</a >
        </td>
    </tr><br>
    @endisset
    @isset($enrollment->user->userDetail->userDocument->sponsor_letter)
        <tr>
        <td>Sponsor Letter</td>
        <td>
             <a  href="{{ Storage::url($enrollment->user->userDetail->userDocument->sponsor_letter) }}">Download</a >
        </td>
    </tr><br>
    @endisset
    @isset($enrollment->user->userDetail->userDocument->sponsor_letter_sign_id)
        <tr>
        <td>Sponsor Letter Signed</td>
        <td>
             <a  href="{{ Storage::url($enrollment->user->userDetail->userDocument->sponsor_letter_sign_id) }}">Download</a >
        </td>
    </tr><br>
    @endisset
    @isset($enrollment->user->userDetail->userDocument->letter_accept)
        <tr>
        <td>Accept Letter</td>
        <td>
             <a  href="{{ Storage::url($enrollment->user->userDetail->userDocument->letter_accept) }}">Download</a >
        </td>
    </tr><br>
    @endisset
    @isset($enrollment->user->userDetail->userDocument->financial)
         <tr>
        <td>Financial Statment</td>
        <td>
            <a  href="{{ Storage::url($enrollment->user->userDetail->userDocument->financial) }}">Download</a >
        </td>
    </tr><br>
    @endisset
    @isset($enrollment->user->userDetail->userDocument->medical)
        <tr>
        <td>Medical Statment</td>
        <td>
            <a  href="{{ Storage::url($enrollment->user->userDetail->userDocument->medical) }}">Download</a >
        </td>
    </tr><br>
    @endisset
    @isset($enrollment->user->userDetail->userDocument->academic_transkip)
        <tr>
        <td>Academic Transkip</td>
        <td>
            <a  href="{{ Storage::url($enrollment->user->userDetail->userDocument->academic_transkip) }}">Download</a >
        </td>
    </tr><br>
    @endisset
    @isset($enrollment->user->userDetail->userDocument->last_certificate)
        <tr>
        <td>Last Certificate</td>
        <td>
             <a  href="{{ Storage::url($enrollment->user->userDetail->userDocument->last_certificate) }}">Download</a >
        </td>
    </tr>
    @endisset
   
    
    
    
    
    
   
    
    
    


    
    
    
    
    
    

    
    
   
</section>