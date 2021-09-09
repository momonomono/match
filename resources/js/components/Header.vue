// 全体共通のナビゲーション

<template>
    <header class="l-header">
        <div class="p-header">
            <img :src="'/img/logo.png'" class="p-header__logo" />

            <!-- ログインしている場合に表示されるナビゲーション -->
            <ul class="p-header__container" v-if="authFlg">
                <HeaderNavItem linkName="メッセージ" link />
                <HeaderNavItem linkName="案件" link />
                <HeaderNavItem link="/mypage" linkName="マイページ" />
                <HeaderNavItem link="/logout" linkName="ログアウト" />
            </ul>

            <!-- ログインしていない場合に表示させるナビゲーション -->
            <ul class="p-header__container" v-else>
                <HeaderNavItem link="/login" linkName="ログイン" />
                <HeaderNavItem link="/signup" linkName="ユーザー登録" />
            </ul>
        </div>
    </header>
</template>

<script>
// ナビゲーションの項目
import HeaderNavItem from './HeaderNavItem.vue';

// ナビゲーションのアコーディオンメニュー化した項目
import HeaderNavAccordion from './HeaderNavAccordion.vue';

export default {
    props: {
        authFlg: {
            type: Boolean,
            required: true,
        },
    },
    data: function() {
        return {
            clickedName: '',
        };
    },
    methods: {},
    components: {
        HeaderNavItem,
        HeaderNavAccordion,
    },
};
</script>