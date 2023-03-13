meeting: 12/Fab/2023 at 11:00PM
Meeting: 001;

✅1::Add translator to Category and Contry module (20min) pass true with translate function wehn dynamic data.
    ✅--Add translate helper function to Category and Contry module.

✅2::Contry module in dashboard (10min)
    ✅--Add pagination component to contry module like Users Active component

✅3::On Users > Active component (30min)
    ✅--Implement datatable
    ✅--Soft delete
    ✅--Restore

✅::On Talent > Login > Video upload issue. (1H)
    ✅-- Upload 5s-10s video.

✅4::Settings module (1D)
    -- ✅English, Français, Español column (settings(additional))
    -- ✅Basic configuration (settings(additional))
    -- ✅Page title, slug, Description(text editor) (settings(additional))
Total: 1 Day;

Next meeting: 13/Fab/2023 at 11:00PM
-----------------------------------------
Meeting: 002;

*****✅::Table no data found Alert component
2::✅Page module 1hour
    -- ✅Page edit component
    -- ✅Page Delete
    -- ✅Max 2 page create.

3::✅User password change 40min
    --✅ make password changer component for user and talent
    --✅ Password changer component put on root of AdminDashboard folder.
    --✅ make country column to country_id and make relation. And pass contry id when register and store.

4::✅On User table 2min
    -- ✅add column name status
    -- ✅add column to user table named file_access

5::✅T-Application module 1hour
    -- ✅add datatable
    -- ✅user approve or reject
    -- ✅if approve show Verified instad of video open button.
    -- ✅datatable on application declined list.

6::✅On talent module 30min
    -- ✅onclick eye button navigate to the user details page.
    -- ✅soft delete, restore
Total: 1 Day;

Next meeting: 14/Fab/2023 at 11:00PM
-----------------------------------------
Meeting: 003;

1::✅Render category list on offcanvas order by desc.. (scrollable) 10min
2::✅Render talents uploaded video which is selected by admin. 2.5hour
    -- ✅first time, render first 2 category and related video.
    -- ✅on next and prev arrow click, Show next 2 category and related video.

3:: ✅user dashboard>account module. 30min
    -- ✅personal information.(disable email)
    -- ✅password change
    -- ✅account soft delete

4:: ✅talent dashboard>account module 5min
    -- ✅personal information.(disable email)
    -- ✅password change
    -- ✅account soft delete
    -- ✅rename email name to email

5:: ✅talent dashboard>profile setup module 35min
    -- ✅replace video
    -- ✅change category
    -- ✅when video selected, show Close icon component.

6:: ✅By clicking talents navigate to talents profile 50min
    -- ✅talent profile render talents information, video.
    -- ✅user follow talents, unfollow talents

7:: ✅user dashboard>following module, 30min
    -- ✅render following talents.
    -- ✅unfollow talents
    -- try video thumbnail https://codepen.io/aertmann/pen/mrVaPx

✅Hey, how is it going. This is the Guide for talents (Not for users - I will send you the one for users later) For the languages, we will replace Spanish by Portugues. The guide for talents that I have sent is in both ENGLISH and FRANCAIS. Thanks


Next meeting: 16/Fab/2023 at 11:00PM
-----------------------------------------
Meeting: 004;

1:: ✅mail config
2:: stripe implement
3:: ✅user follower list

Next meeting: 17/Fab/2023 at 11:00PM
-----------------------------------------
Meeting: 005;

4::✅ on admin->pages add type from option field. <CSelect /> (
    -- value --
    privacy-policy
    terms-of-service
    -- name --
    Privacy policy
    Terms of service
    [{
        key: 'privacy-policy',
        value: 'Privacy policy'
    },
    {
        key: 'terms-of-service',
        value: 'Terms of service'
    }]
)

5::✅ Add spanish language

6::✅ if user->following list empty show no result found.

7:: ✅copy category module and make it Occasion module.

8:: ✅make wish module
    -- ✅table for save talent wish amount and status (minimum amount 30$).
    -- ✅if wish amount exist update amount else create.
    -- user wish for talent. (
        --user_id, talent_id, wish_amount, wish_details..., payment, transaction table.
    )

9:: ✅Tips
    -- ✅talent activate tips. (
        -- ✅minimum tips automatically set 10$.
        -- user can pay more.
    )

10:: ✅My life
    -- yearly subscription minimum 50$

11:: ✅user talent profile
    -- ✅tips, mylyfe etc show if active.

12:: ✅sub category
    ✅talent registration
        -- ✅category_id
        -- ✅sub_category_id
    ✅talent profile setup
        -- ✅category_id, sub_category_id



Next meeting: 19/Fab/2023 at 11:00PM
-----------------------------------------
Meeting: 006;

1:: ✅talent registration.. category, sub category filter
2:: ✅From talent profile -> redirect payment info page with service name.
    -- ✅save information on continue payment click save info to local storage
            and redirect to payment gateway page.
        -- ✅on continue payment click. show payment confirmation popup
            -- popup will contain total amount and service charge + commission
    -- ✅on gateway generate unique order number
            -- ✅make One  helper table for generate unique number
        -- ✅show service type

3:: talent/dashboard/payout
   ✅ bank information
        -- bank type
        input filds for stripe and bank.

Next meeting: 19/Fab/2023 at 11:00PM
-----------------------------------------
Meeting: 007;

1:: on talent/dashboard/payout
    -- check if request amount is available.
2:: on admin/dashboard/payments
    -- show pending payment requests
    -- By clicking pay  now button status update to paid
    -- by clicking cancel button soft delete

    -- show pending and soft deleted list on payout processed tab


3:: ✅select talents for frontend
4:: ✅category parent could not be same parent.
5:: ✅category refector.
6:: rename talent_earnings to talents_earnings_type
    -- make talent_earnings for user payment
6:: add balance field to user table

7:: on ad;min panel > wish request status column and done/button

    talents_earnings
        talent_id, user_id, amount, commission_amount, commission, type, gender, instructio.............

        -- user can pay more. (look line)


----------------------------
✅select type on page create.

✅show talent on frontend after approve.

✅payment select occasion without

✅category which has talent

✅on left sidebar..
	✅sub category will dropdown under category

✅payment->card number will change on input


✅page type will unique
page type default value


Task by muhib:
---------------------
1. ✅Upload cover picture in talent "My life" menu
2. ✅Make functional/dynamic 'Add/Manage' under "My life" menu, after clicking preview button, show the cover 
    picture in banner section and show the video in bottom that talent uploaded in 'add/manage'
3. ✅Add our confirm modal in  T-Application's approved and decline button
4. ✅In frontend make contact page dynamic (controller, model, and migration created), 
    use php strip_tag function to avoid the html tag
5. ✅ In admin dashboard here is a menu called "Contact info", show the list of contact information 
    submitted from frontend, if admin click on replay button change the "seen" value to 1 in DB, and make reply function in modal.
6. ✅and we have a new page called "FAQ", we need to make this page from backend



----------------------------
14-03-2023
ADMIN SHOULD HAVE THEIR OWN LOGIN PANEL NOT SAME AS WEBSITE LOGIN

HOME PAGE/LANDING PAGE: HERE PLEASE ADD THE NAME OF THE PERSON ON THE VIDEO. WHEN WE (TALENTS/USERS WHO ARE LOGGED IN) CLICK ON A VIDEO IT SHOULD REDIRECT US TO THE TALENT PROFILE PAGE. IF THE PERSON WHO CLICKS ON IT DOES NOT HAVE AN ACCOUNT OR IS NOT LOGGED IN THEN HE SHOULD BE REDIRECTED TO THE SIGN UP/SIGN IN PAGE.

SUBCATEGORIES SHOULD BE ADDED UNDER CATEGORIES ON ‘BECOME A TALENT PAGE’, ‘PROFILE SET UP PAGE’ FOR TALENT AND IN THE ADMIN/CATEGORY PAGE

=> WE ARE MISSING CATEGORIES PAGE, FAQ PAGE, AND CONTACT PAGE ON THE BOTTOM OF THE WEBSITE PAGES WE ONLY SEE TERMS AND PRIVACY.

WHEN A USER CREATE AN ACCOUNT, THEY SHOULD GET A VERIFICATION EMAIL TO ACTIVATE THEIR USER ACCOUNT BEFORE HAVING ACCESS TO THE WEBSITE.

ALL CHECKED BOX TERMS SHOULD BE UNCHECKED. USER OR TALENT WILL HAVE TO CHECK THEM BEOFRE PROCEEDING AND CREATE AN ACCOUNT OR SUBMITTING THE REQUEST TO BECOME A TALENT.

THE RED COLOR ON MESSAGE AND NOTIFICATION SHOULD ONLY APPEAR IF A MESSAGE OR NOTIFICATION IS ACTUALLY RECEIVED.

AFTER BECOME A TALENT REQUEST IS SENT, THERE SHOULD BE A POP UP TO LET THE APPLICANT KNOW THAT THEIR REQUEST HAS BEEN SUBMITTED.

ONCE A TALENT IS APPROVED THEY SHOULD GET AN EMAIL ND LET THEM KNOW THAT WAS APPROVE/DECLINE – IN CASE OF APPROVAL THEY SHOULD GET A LINK AND WHEN THEY CLICK ON THE LINK IT SHOULD FIRST TAKE THAM TO A PAGE TO SET UP THEIR PASSWORD AND AFTER THAT THEY SHOULD BE REDIRECTED TO THE PROFILE SET UP PAGE TO ADD A VIDEO, PICTURE AND FILL ALL MANDATORY INFORMATION.

Show calendar section on user when there in talent profile if the talent has any calendar that has isSalable true/1








--------------------
Textarea component character limit issue.