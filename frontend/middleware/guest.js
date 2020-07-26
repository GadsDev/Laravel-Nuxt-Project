/**
 * 
 * Redireciona para o profile caso esteja authenticated
 */
export default function ({ store, redirect }) {
    if (store.getters['authenticated']) {
        return redirect('/profile')
    }
}