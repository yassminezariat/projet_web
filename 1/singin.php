< ? p h p  
  
     s e s s i o n _ s t a r t ( ) ;  
  
     i n c l u d e _ o n c e   ' C o n t r o l l e r / C l i e n t C . p h p ' ;  
     i n c l u d e _ o n c e   ' M o d e l / C l i e n t . p h p ' ;  
 $ m e s s a g e = " " ;  
 $ C l i e n t 1 C   =   n e w   c l i e n t C ( ) ;  
  
 $ C l i e n t C   =   n e w   C l i e n t C ( ) ;  
  
 i f   ( i s s e t ( $ _ P O S T [ " e m a i l " ] )   & &  
         i s s e t ( $ _ P O S T [ " p a s s w o r d " ] ) )   {     i f   ( ! e m p t y ( $ _ P O S T [ " e m a i l " ] )   & &   ! e m p t y ( $ _ P O S T [ " p a s s w o r d " ] ) )  
         {       $ m e s s a g e = $ C l i e n t C - > c o n n e x i o n U s e r ( $ _ P O S T [ " e m a i l " ] , $ _ P O S T [ " p a s s w o r d " ] ) ;  
             $ h e d h a = $ C l i e n t C - > i d C l i e n t t ( $ _ P O S T [ " e m a i l " ] , $ _ P O S T [ " p a s s w o r d " ] ) ;  
  
                 $ _ S E S S I O N [ ' e ' ]   =   $ h e d h a [ ' i d C l i e n t ' ] ;  
             / /   o n   s t o c k e   d a n s   l e   t a b l e a u   u n e   c o l o n n e   a y a n t   c o m m e   n o m   " e " ,  
                 / /     a v e c   l ' e m a i l   ?   l ' i n t ? r i e u r  
  
                 i f ( $ m e s s a g e ! = ' p s e u d o   o u   l e   m o t   d e   p a s s e   e s t   i n c o r r e c t ' )   {  
  
                         $ u s e r   =   $ C l i e n t 1 C - > r e c u p e r e r r o l e ( $ _ P O S T [ ' e m a i l ' ] ) ;  
                         i f   ( $ u s e r [ ' r o l e ' ]   = =   ' c l i e n t ' )   {  
                                 h e a d e r ( ' L o c a t i o n : i n d e x . p h p ' ) ;   / / c l i e n t  
                         } e l s e  
                                 {   h e a d e r ( ' L o c a t i o n : . . / b a c k / ' ) ; }   / / a d m i n  
                 }  
                 e l s e {  
                         $ m e s s a g e = ' p s e u d o   o u   l e   m o t   d e   p a s s e   e s t   i n c o r r e c t ' ;  
  
  
                 } }  
         e l s e  
                 $ m e s s a g e   =   " M i s s i n g   i n f o r m a t i o n " ; }  
 ? >  
 < ! D O C T Y P E   h t m l >  
 < h t m l   l a n g = " z x x " >  
  
  
 < h e a d >  
         < t i t l e > C r e a t u r e   A n i m a l s   C a t e g o r y   F l a t   B o o t s t r a p   R e s p o n s i v e   w e b s i t e   T e m p l a t e   |   H o m e   : :   w 3 l a y o u t s < / t i t l e >  
         < m e t a   n a m e = " v i e w p o r t "   c o n t e n t = " w i d t h = d e v i c e - w i d t h ,   i n i t i a l - s c a l e = 1 " >  
         < m e t a   c h a r s e t = " u t f - 8 "   / >  
         < m e t a   n a m e = " k e y w o r d s "   c o n t e n t = " C r e a t u r e   R e s p o n s i v e   w e b   t e m p l a t e ,   B o o t s t r a p   W e b   T e m p l a t e s ,   F l a t   W e b   T e m p l a t e s ,   A n d r o i d   C o m p a t i b l e   w e b   t e m p l a t e ,  
 	 S m a r t P h o n e   C o m p a t i b l e   w e b   t e m p l a t e ,   f r e e   W e b D e s i g n s   f o r   N o k i a ,   S a m s u n g ,   L G ,   S o n y   E r i c s s o n ,   M o t o r o l a   w e b   d e s i g n "   / >  
         < s c r i p t >  
                 a d d E v e n t L i s t e n e r ( " l o a d " ,   f u n c t i o n ( )   {  
                         s e t T i m e o u t ( h i d e U R L b a r ,   0 ) ;  
                 } ,   f a l s e ) ;  
  
                 f u n c t i o n   h i d e U R L b a r ( )   {  
                         w i n d o w . s c r o l l T o ( 0 ,   1 ) ;  
                 }  
         < / s c r i p t >  
         < ! - -   C u s t o m   T h e m e   f i l e s   - - >  
         < l i n k   h r e f = " c s s / b o o t s t r a p . c s s "   t y p e = " t e x t / c s s "   r e l = " s t y l e s h e e t "   m e d i a = " a l l " >  
         < ! - -   c o l o r   s w i t c h   - - >  
         < l i n k   h r e f = " c s s / b l a s t . m i n . c s s "   r e l = " s t y l e s h e e t "   / >  
         < ! - -   p o r t f o l i o   - - >  
         < l i n k   h r e f = " c s s / p o r t f o l i o . c s s "   t y p e = " t e x t / c s s "   r e l = " s t y l e s h e e t "   m e d i a = " a l l " >  
         < l i n k   h r e f = " c s s / s t y l e . c s s "   t y p e = " t e x t / c s s "   r e l = " s t y l e s h e e t "   m e d i a = " a l l " >  
         < ! - -   f o n t - a w e s o m e   i c o n s   - - >  
         < l i n k   h r e f = " c s s / f o n t - a w e s o m e . m i n . c s s "   r e l = " s t y l e s h e e t " >  
         < ! - -   o n l i n e - f o n t s   - - >  
         < l i n k   h r e f = " / / f o n t s . g o o g l e a p i s . c o m / c s s ? f a m i l y = P o p p i n s : 1 0 0 , 1 0 0 i , 2 0 0 , 2 0 0 i , 3 0 0 , 3 0 0 i , 4 0 0 , 4 0 0 i , 5 0 0 , 5 0 0 i , 6 0 0 , 6 0 0 i , 7 0 0 , 7 0 0 i , 8 0 0 , 8 0 0 i , 9 0 0 , 9 0 0 i "   r e l = " s t y l e s h e e t " >  
         < l i n k   h r e f = " / / f o n t s . g o o g l e a p i s . c o m / c s s ? f a m i l y = L a t o : 1 0 0 , 1 0 0 i , 3 0 0 , 3 0 0 i , 4 0 0 , 4 0 0 i , 7 0 0 , 7 0 0 i , 9 0 0 , 9 0 0 i "   r e l = " s t y l e s h e e t " >  
 < / h e a d >  
  
 < b o d y   i d = " p a g e - t o p "   d a t a - s p y = " s c r o l l "   d a t a - t a r g e t = " . n a v b a r - f i x e d - t o p " >  
  
  
  
     < d i v   c l a s s = " m o d a l - c o n t e n t " >  
         < f o r m   a c t i o n = " "   m e t h o d = " P O S T " >  
                             < d i v   c l a s s = " m o d a l - h e a d e r " >  
                                     < h 5   c l a s s = " m o d a l - t i t l e "   i d = " e x a m p l e M o d a l L a b e l " > S i g n i n < / h 5 >  
                                     < b u t t o n   t y p e = " b u t t o n "   c l a s s = " c l o s e "   d a t a - d i s m i s s = " m o d a l "   a r i a - l a b e l = " C l o s e " >  
                                             < s p a n   a r i a - h i d d e n = " t r u e " > ? < / s p a n >  
                                     < / b u t t o n >  
                             < / d i v >  
                             < d i v   c l a s s = " m o d a l - b o d y " >  
                                     < f o r m   a c t i o n = " # "   m e t h o d = " P O S T "   c l a s s = " p - s m - 3 " >  
                                             < d i v   c l a s s = " f o r m - g r o u p " >  
                                                     < l a b e l   f o r = " r e c i p i e n t - n a m e "   c l a s s = " c o l - f o r m - l a b e l " > U s e r n a m e < / l a b e l >  
                                                     < i n p u t   t y p e = " t e x t "   c l a s s = " f o r m - c o n t r o l "   p l a c e h o l d e r = " e m a i l "   n a m e = " e m a i l "   i d = " e m a i l "   r e q u i r e d = " " >  
                                             < / d i v >  
                                             < d i v   c l a s s = " f o r m - g r o u p " >  
                                                     < l a b e l   f o r = " p a s s w o r d "   c l a s s = " c o l - f o r m - l a b e l " > P a s s w o r d < / l a b e l >  
                                                     < i n p u t   t y p e = " p a s s w o r d "   c l a s s = " f o r m - c o n t r o l "   p l a c e h o l d e r = " p a s s w o r d "   n a m e = " p a s s w o r d "   i d = " p a s s w o r d "   r e q u i r e d = " " >  
                                             < / d i v >  
                                             < d i v   c l a s s = " r i g h t - w 3 l " >  
                                                     < i n p u t   c l a s s = " b t n   b t n - p r i m a r y   b t n - l g   b t n - b l o c k "   t y p e = " s u b m i t "   n a m e = " s u b m i t "   v a l u e = " S e   C o n n e c t e r "   o n C l i c k = " v a l i d a t i o n ( ) " >  
                                             < / d i v >  
                                             < d i v   c l a s s = " r o w   s u b - w 3 l   m y - 3 " >  
                                                     < d i v   c l a s s = " c o l - s m - 6   s u b - w 3 _ p v t " >  
  
                                                             < l a b e l   f o r = " b r a n d 1 " >  
                                                                 V o u s   n ' a v e z   p a s   u n   c o m p t e   ?  
                                                                 < a   h r e f = " i n s c r e p t i o n . p h p " > S ' i n s c r i r e < / a >  
  
                                                     < / d i v >  
                                                     < d i v   c l a s s = " c o l - s m - 6   f o r g o t - w 3 l   t e x t - s m - r i g h t " >  
                                                             < a   h r e f = " # "   c l a s s = " t e x t - s e c o n d a r y " > F o r g o t   P a s s w o r d ? < / a >  
                                                     < / d i v >  
                                             < / d i v >  
  
                                     < / f o r m >  
                             < / d i v >  
                         < / f o r m >  
                     < / d i v >  
  
         < ! - -   / / b l o g   m o d a l 3 - - >  
         < ! - -   j s   - - >  
         < s c r i p t   s r c = " j s / j q u e r y - 2 . 2 . 3 . m i n . j s " > < / s c r i p t >  
         < ! - -   / / j s   - - >  
         < ! - -   s c r i p t   f o r   p a s s w o r d   m a t c h   - - >  
         < s c r i p t >  
                 w i n d o w . o n l o a d   =   f u n c t i o n ( )   {  
                         d o c u m e n t . g e t E l e m e n t B y I d ( " p a s s w o r d 1 " ) . o n c h a n g e   =   v a l i d a t e P a s s w o r d ;  
                         d o c u m e n t . g e t E l e m e n t B y I d ( " p a s s w o r d 2 " ) . o n c h a n g e   =   v a l i d a t e P a s s w o r d ;  
                 }  
  
                 f u n c t i o n   v a l i d a t e P a s s w o r d ( )   {  
                         v a r   p a s s 2   =   d o c u m e n t . g e t E l e m e n t B y I d ( " p a s s w o r d 2 " ) . v a l u e ;  
                         v a r   p a s s 1   =   d o c u m e n t . g e t E l e m e n t B y I d ( " p a s s w o r d 1 " ) . v a l u e ;  
                         i f   ( p a s s 1   ! =   p a s s 2 )  
                                 d o c u m e n t . g e t E l e m e n t B y I d ( " p a s s w o r d 2 " ) . s e t C u s t o m V a l i d i t y ( " P a s s w o r d s   D o n ' t   M a t c h " ) ;  
                         e l s e  
                                 d o c u m e n t . g e t E l e m e n t B y I d ( " p a s s w o r d 2 " ) . s e t C u s t o m V a l i d i t y ( ' ' ) ;  
                         / / e m p t y   s t r i n g   m e a n s   n o   v a l i d a t i o n   e r r o r  
                 }  
         < / s c r i p t >  
         < ! - -   s c r i p t   f o r   p a s s w o r d   m a t c h   - - >  
         < ! - -   B a n n e r     R e s p o n s i v e s l i d e s   - - >  
         < s c r i p t   s r c = " j s / r e s p o n s i v e s l i d e s . m i n . j s " > < / s c r i p t >  
         < s c r i p t >  
                 / /   Y o u   c a n   a l s o   u s e " $ ( w i n d o w ) . l o a d ( f u n c t i o n ( )   { "  
                 $ ( f u n c t i o n ( )   {  
                         / /   S l i d e s h o w   4  
                         $ ( " # s l i d e r 3 " ) . r e s p o n s i v e S l i d e s ( {  
                                 a u t o :   t r u e ,  
                                 p a g e r :   t r u e ,  
                                 n a v :   f a l s e ,  
                                 s p e e d :   5 0 0 ,  
                                 n a m e s p a c e :   " c a l l b a c k s " ,  
                                 b e f o r e :   f u n c t i o n ( )   {  
                                         $ ( ' . e v e n t s ' ) . a p p e n d ( " < l i > b e f o r e   e v e n t   f i r e d . < / l i > " ) ;  
                                 } ,  
                                 a f t e r :   f u n c t i o n ( )   {  
                                         $ ( ' . e v e n t s ' ) . a p p e n d ( " < l i > a f t e r   e v e n t   f i r e d . < / l i > " ) ;  
                                 }  
                         } ) ;  
  
                 } ) ;  
         < / s c r i p t >  
         < ! - -   / / B a n n e r     R e s p o n s i v e s l i d e s   - - >  
         < ! - -   S c r o l l i n g   N a v   J a v a S c r i p t   - - >  
         < s c r i p t   s r c = " j s / s c r o l l i n g - n a v . j s " > < / s c r i p t >  
         < s c r i p t   s r c = " j s / c o u n t e r . j s " > < / s c r i p t >  
         < ! - -   p o r t f o l i o   - - >  
         < s c r i p t   s r c = " j s / j q u e r y . p i c E y e s . j s " > < / s c r i p t >  
         < s c r i p t >  
                 $ ( f u n c t i o n ( )   {  
                         / / p i c t u r e s E y e s ( $ ( ' . d e m o   l i ' ) ) ;  
                         $ ( ' . d e m o   l i ' ) . p i c E y e s ( ) ;  
                 } ) ;  
         < / s c r i p t >  
         < ! - -   / / p o r t f o l i o   - - >  
         < ! - -   s t a r t - s m o o t h - s c r o l l i n g   - - >  
         < s c r i p t   s r c = " j s / m o v e - t o p . j s " > < / s c r i p t >  
         < s c r i p t   s r c = " j s / e a s i n g . j s " > < / s c r i p t >  
         < s c r i p t >  
                 j Q u e r y ( d o c u m e n t ) . r e a d y ( f u n c t i o n ( $ )   {  
                         $ ( " . s c r o l l " ) . c l i c k ( f u n c t i o n ( e v e n t )   {  
                                 e v e n t . p r e v e n t D e f a u l t ( ) ;  
  
                                 $ ( ' h t m l , b o d y ' ) . a n i m a t e ( {  
                                         s c r o l l T o p :   $ ( t h i s . h a s h ) . o f f s e t ( ) . t o p  
                                 } ,   1 0 0 0 ) ;  
                         } ) ;  
                 } ) ;  
         < / s c r i p t >  
         < ! - -   / / e n d - s m o o t h - s c r o l l i n g   - - >  
         < ! - -   s m o o t h - s c r o l l i n g - o f - m o v e - u p   - - >  
         < s c r i p t >  
                 $ ( d o c u m e n t ) . r e a d y ( f u n c t i o n ( )   {  
                         / *  
                         v a r   d e f a u l t s   =   {  
                                 c o n t a i n e r I D :   ' t o T o p ' ,   / /   f a d i n g   e l e m e n t   i d  
                                 c o n t a i n e r H o v e r I D :   ' t o T o p H o v e r ' ,   / /   f a d i n g   e l e m e n t   h o v e r   i d  
                                 s c r o l l S p e e d :   1 2 0 0 ,  
                                 e a s i n g T y p e :   ' l i n e a r '  
                         } ;  
                         * /  
                         $ ( ) . U I t o T o p ( {  
                                 e a s i n g T y p e :   ' e a s e O u t Q u a r t '  
                         } ) ;  
  
                 } ) ;  
         < / s c r i p t >  
         < s c r i p t >  
                         f u n c t i o n   v i d e _ l o g ( )   {  
                                 v a r   c h   =   d o c u m e n t . g e t E l e m e n t B y I d ( " l o g i n " ) . v a l u e ;  
                                 v a r   e l e m e n t   =   d o c u m e n t . g e t E l e m e n t B y I d ( " e l e m e n t l o g " ) ;  
                                 i f   ( c h   = = =   " " )   {   e l e m e n t . s t y l e . d i s p l a y   =   " b l o c k " ;   }   e l s e   {   e l e m e n t . s t y l e . d i s p l a y   =   " n o n e " ;   }  
                         }  
                         f u n c t i o n   v i d e _ p a s s ( )   {  
                                 v a r   c h   =   d o c u m e n t . g e t E l e m e n t B y I d ( " p a s s " ) . v a l u e ;  
                                 v a r   e l e m e n t   =   d o c u m e n t . g e t E l e m e n t B y I d ( " e l e m e n t p a s s " ) ;  
                                 i f   ( c h   = = =   " " )   {   e l e m e n t . s t y l e . d i s p l a y   =   " b l o c k " ;   }   e l s e   {   e l e m e n t . s t y l e . d i s p l a y   =   " n o n e " ;   }  
                         }  
                 f u n c t i o n   v a l i d a t i o n ( ) {  
                         v i d e _ l o g ( ) ;  
                         v i d e _ p a s s ( ) ;  
                 }  
                 < / s c r i p t >  
  
         < s c r i p t   s r c = " j s / S m o o t h S c r o l l . m i n . j s " > < / s c r i p t >  
         < ! - -   / / s m o o t h - s c r o l l i n g - o f - m o v e - u p   - - >  
         < ! - -   c o l o r   s w i t c h   - - >  
         < s c r i p t   s r c = " j s / b l a s t . m i n . j s " > < / s c r i p t >  
         < ! - -   B o o t s t r a p   c o r e   J a v a S c r i p t  
 = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =   - - >  
         < ! - -   P l a c e d   a t   t h e   e n d   o f   t h e   d o c u m e n t   s o   t h e   p a g e s   l o a d   f a s t e r   - - >  
         < s c r i p t   s r c = " j s / b o o t s t r a p . j s " > < / s c r i p t >  
 < / b o d y >  
  
 < / h t m l >  
 