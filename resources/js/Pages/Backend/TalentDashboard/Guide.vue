<template>
    <DashboardLayout>
        <template v-slot:leftSidebar>
            <LeftSide />
        </template>
        <template v-slot:content>
            GUIDE (ENGLISH)


            As a talent, you will be able to activate up to the four (4) following options:


            -Calendar
            -Wishes
            -Tips
            -My life


            Please note that only the options that you choose to activate will be visible on your profile and accessible to users.




            CALENDAR


            As a talent, you can build your own calendar and sell it to users or your fans.
            Please make sure that the pictures that you use are only made for your calendar and cannot be found on any of your social network. Otherwise, why someone would want to buy it, if the same pictures could be found on any of your social media page?


            Amount: The minimum you can charge for a calendar is $10. There is no maximum.
            However, select a price that you feel most of your fans will be able to afford.


            Please note that to be able to sell your calendar, you will have to post it to your
            profile page after creating it.


            You cannot use anyone else’s pictures for your calendar except your own. If someone else is with you on the picture, you must have a verbal consent from that person. This does not apply to any other talents who are in a group. (Ex, a group a singer, a team of sport etc...)




            WISHES


            As a talent, you will receive wishes requests from users or fans.
            You will have 120 hours (five days) to fulfill their requests and send the wish video to the person who requested it.
            We will hold payments made by any user until the request is fulfilled on time. If not, the requester will be refunded.


            Amount: The minimum amount for a wish request is set to $30.
            There is no maximum, however select a price that you feel most of your fans will be able to afford.


            Make sure to always check your email for notifications and also respond to the wishes requests on time.


            **Keep in mind that people who request a wish from you, are fans and they love you. Please show them some love and smile while making the video and just be yourself**


            Please note that to be able to accept wish request you will have to activate the wish request option on your dashboard.


            TIPS


            As a talent, you can accept TIPS from anyone. The minimum for tips is set to $10.


            Please note that to be able to accepts tips you will have to activate the tip option on your dashboard.


            MY LIFE


            Here, you can allow anyone to subscribe to this option to have access to your private life.
            Videos that you will be posting on this section should be exclusive and cannot be found anywhere. You should regularly upload videos to entertain your audience.


            EX: Home tour, travel, backstage of your concert, day to day life. Any content of interest
            that you would like to share with your audience. PORNOGRAPHY IS FORBIDEN. Any talents found guilty of uploading pornographic videos would have their account deactivated immediately without any notice.


            Amount: The minimum amount to charge per year is $50.


            Please note that to be able to offer this option to your fans, you will have to activate it on your dashboard.




            EARNING: You will receive 75% of the amount you charge. The remaining 25% and any service, transaction, or order processing fee will go to Nextwisher.






            GUIDE (FRANÇAIS)

            En tant que talent, vous pourrez activer jusqu'à quatre (4) options suivantes :
            -Calendrier
            - Vœux
            -Tips
            -Ma vie
            Veuillez noter que seules les options que vous choisissez d'activer seront visibles sur votre profil et accessibles aux utilisateurs.

            CALENDRIER
            En tant que talent, vous pouvez créer votre propre calendrier et le vendre aux utilisateurs ou à vos fans. Veuillez-vous assurer que les images que vous utilisez sont uniquement destinées à votre calendrier et ne peuvent être trouvées sur aucun de vos réseaux sociaux. Sinon, pourquoi quelqu'un voudrait-il l'acheter, si les mêmes images pouvaient être trouvées sur l'une de vos pages de médias sociaux ?
            Montant : Le minimum que vous pouvez facturer pour un calendrier est de 10 $. Il n'y a pas de maximum. Cependant, choisissez un prix que la plupart de vos fans pourront se permettre de payer.
            Veuillez noter que pour pouvoir vendre votre calendrier, vous devrez le publier sur votre page de profil après l'avoir créée.
            Vous ne pouvez pas utiliser les photos de quelqu'un d'autre pour votre calendrier, sauf les vôtres. Si quelqu'un d'autre est avec vous sur la photo, vous devez avoir un consentement verbal de cette personne. Cela ne s'applique pas aux autres talents qui sont dans un groupe. (Ex, un groupe de chanteurs, une équipe de sport etc.…)

            VOEUX
            En tant que talent, vous recevrez des demandes de souhaits d'utilisateurs ou de fans. Vous aurez 120 heures (cinq jours) pour répondre à leurs demandes et envoyer la vidéo de souhait à la personne qui l'a demandée.
            Nous retiendrons les paiements effectués par tout utilisateur jusqu'à ce que la demande soit satisfaite à temps. Dans le cas contraire, le demandeur sera remboursé.
            Montant : Le montant minimum pour une demande de souhait est fixé à 30 $. Il n'y a pas de maximum, cependant choisissez un prix que la plupart de vos fans pourront se permettre de payer.
            Assurez-vous de toujours vérifier vos courriels pour les notifications et de répondre également aux demandes de souhaits à temps.
            ** Gardez à l'esprit que les personnes qui vous demandent un vœu sont des fans et qu'elles vous aiment. S'il vous plaît, montrez-leur un peu d'amour et souriez tout en faisant la vidéo et soyez simplement vous-même **
            Veuillez noter que pour pouvoir accepter la demande de souhait, vous devrez activer l'option de demande de souhait sur votre tableau de bord.

            TIPS
            En tant que talent, vous pouvez accepter des TIPS de n'importe qui. Le minimum pour les pourboires est fixé à 10 $.
            Veuillez noter que pour pouvoir accepter les pourboires, vous devrez activer l'option de pourboire sur votre tableau de bord.

            MA VIE
            Ici, vous pouvez permettre à quiconque de souscrire à cette option pour avoir accès à votre vie privée.
            Les vidéos que vous publierez sur cette section doivent être exclusives et ne peuvent être trouvées nulle part. Vous devez régulièrement mettre en ligne des vidéos pour divertir votre public.
            EX : Visite à domicile, voyage, coulisses de votre concert, vie de tous les jours. Tout contenu d'intérêt que vous aimeriez partager avec votre public. LA PORNOGRAPHIE EST INTERDITE. Tout talent reconnu coupable d'avoir mis en ligne des vidéos pornographiques verrait son compte immédiatement désactivé sans préavis.
            Montant : Le montant minimum à facturer par an est de 50 $. Veuillez noter que pour pouvoir proposer cette option à vos fans, vous devrez l'activer sur votre tableau de bord.

            GAINS : Vous recevrez 75 % du montant que vous facturez. Les 25 % restants et tous les frais de service, de transaction ou de traitement de commande iront à NEXTWISHER.

        </template>
    </DashboardLayout>
</template>

<script setup>
import DashboardLayout from '../DashboardLayout.vue'
import LeftSide from '@/Components/Backend/TalentDashboard/LeftSide.vue';
</script>


<style scoped>
.content {
    grid-template-columns: 250px 1fr;
}
</style>