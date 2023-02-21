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

1:: talent registration.. category, sub category filter
2:: From talent profile -> redirect payment info page with service name.
    -- save information on continue payment click save info to local storage
        and redirect to payment gateway page.
        -- on continue payment click. show payment confirmation popup
            -- popup will contain total amount and service charge + commission
    -- on gateway generate unique order number
            -- make One  helper table for generate unique number
        -- show service type

3:: talent/dashboard/payout
    bank information
        -- bank type
        input filds for stripe and bank.
