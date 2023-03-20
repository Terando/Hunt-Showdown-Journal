<x-layout>
    <main class="container detail-page">

        <nav aria-label="breadcrumb">
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Monsters</a></li>
              <li>Hive</li>
            </ul>
          </nav>

        <hgroup>
            <h1>Hive</h1>
            <h2>Researcher's insight into the Hive</h2>
        </hgroup>

        <div class="grid">
            <aside>
                <figure>
                    <img src="/images/monsters/hive.webp" alt="Hive, a monster from the game Hunt: Showdown">
                </figure>
            </aside>
            <section>
                <p>The hive is a malformed husk of a woman, the torso of whom has been twisted and hijacked by a swarm of malignant stinging insects. A hive's torso has erupted to allow for expansion of the insects' dwelling, its body twisted and gnarled. Hives wander the Bayou, unleashing veritable clouds of insects on Hunters unfortunate enough to disturb them.</p>
                <p>Given the hive's capacity for harassing and poisoning players, it is highly advised that they are prioritized as targets when a skirmish is expected to take place nearby. If attacked by a hive swarm during a gunfight, a player has few options and instantly loses the upper hand.</p>
            </section>

            <article id="hive-stats" class="stats">
                <hgroup>
                    <h2>Stats</h2>
                    <h3>All important stats in one place</h3>
                </hgroup>
                <small>Health</small>
                <progress id="health" value="80" max="150"></progress>

                <small>Damage</small>
                <progress id="damage" value="30" max="150"></progress>

                <small>Trigger range</small>
                <progress id="trigger-range" value="55" max="100"></progress>

                <small>Experience gained (30 exp)</small>
                <progress id="experience-gained" value="30" max="100"></progress>

                <hgroup style="margin-bottom:0;">
                    <h2>Damage type</h2>
                    <h3>Poison</h3>
                </hgroup>
                <svg xmlns="http://www.w3.org/2000/svg" fill="green" width="150" style="margin-left:-25px;" viewBox="0 -8 72 72" id="Layer_1" data-name="Layer 1"><title>poison-alt</title><path d="M48.47,22.7A10.73,10.73,0,0,0,50.12,17c0-4.51-1.56-8.35-5.6-10.7C39.75,3.48,34.67,3.31,29.47,5,21.4,7.59,19.27,17.19,23,22.81a6.1,6.1,0,0,1,.83,2.09,3.65,3.65,0,0,1-.33,1.39,4.83,4.83,0,0,0-.39,1.64,3,3,0,0,0,3.06,2.67c1.94.1,2.35.5,2.48,2.37a.77.77,0,0,0,.5.52,9.7,9.7,0,0,0,2,.12c.68,0,1,.17,1.08.84a.81.81,0,0,0,.48.56,11.63,11.63,0,0,0,1.66-.09c0-.46.05-.83.08-1.23H37c0,.46.05.85.08,1.26L39,35a3,3,0,0,0,.12-.48c.06-.77.46-1,1.23-1a12.88,12.88,0,0,0,1.85-.09c.43,0,.65-.2.58-.66-.26-1.69.92-2.15,2.14-2.27a5.18,5.18,0,0,0,1.92-.49,2.72,2.72,0,0,0,.93-4,1.8,1.8,0,0,1-.2-1.35A8.12,8.12,0,0,1,48.47,22.7Zm-17.2,1.38a5,5,0,0,1-4.54-.52c-1.68-1.25-1.65-4.5.12-5.63A4,4,0,0,1,29,17.37a10.26,10.26,0,0,1,3.39.64A2.37,2.37,0,0,1,34,20.92,3.55,3.55,0,0,1,31.27,24.08Zm6.79,4.63a1.12,1.12,0,0,1-1.45.1,1.52,1.52,0,0,0-2,0,1.56,1.56,0,0,1-1.38-.09A1.3,1.3,0,0,1,33,27.5a28.71,28.71,0,0,1,1.73-3.41c.13-.23.58-.28.89-.41l0,.15c.66-.23,1,.18,1.24.67s.7,1.21,1,1.84a3.48,3.48,0,0,1,.44,1.17A1.76,1.76,0,0,1,38.06,28.71Zm7.37-6.18c-.71,1.42-2,1.81-3.61,1.88-1.38-.18-2.92-.28-3.78-1.7a6.09,6.09,0,0,1-.77-2.29,2.13,2.13,0,0,1,1.25-2.22,7.83,7.83,0,0,1,5.21-.62,2.21,2.21,0,0,1,1.24.86A3.81,3.81,0,0,1,45.43,22.53Z"/><path d="M16.29,45.72a2.9,2.9,0,0,1,1.28-2.78,2.83,2.83,0,0,1,4.16,1.44l4.7-1.7,17.7-6.46,4.7-1.7a2.85,2.85,0,0,1,2.29-3.79A2.88,2.88,0,0,1,53.9,32a2.67,2.67,0,0,1,.37,2.08,1,1,0,0,0,.43,1.12,2.82,2.82,0,1,1-4.43,3.15l-4.75,1.76L27.81,46.57l-4.69,1.71a2.84,2.84,0,0,1-2.29,3.78,2.88,2.88,0,0,1-2.78-1.28,2.67,2.67,0,0,1-.37-2.08,1,1,0,0,0-.43-1.12A3,3,0,0,1,16.29,45.72Z"/><path d="M54.38,43a2.83,2.83,0,0,0-4.16,1.44l-7.1-2.62L37,44l11.74,4.27a2.84,2.84,0,0,0,5.06,2.5,2.63,2.63,0,0,0,.38-2.08,1,1,0,0,1,.42-1.12,2.78,2.78,0,0,0,1-1.81A2.69,2.69,0,0,0,54.38,43Z"/><path d="M17.57,39.85a2.83,2.83,0,0,0,4.16-1.44L28.83,41l6.08-2.18L23.17,34.57a2.85,2.85,0,0,0-2.29-3.79,2.88,2.88,0,0,0-2.77,1.28,2.64,2.64,0,0,0-.38,2.08,1,1,0,0,1-.42,1.12,2.83,2.83,0,0,0-1,1.82A2.74,2.74,0,0,0,17.57,39.85Z"/></svg>
              </article>
        </div>

        <div class="grid">
            <section>
                <hgroup>
                    <h2>Unlock requirements</h2>
                    <h3>How to unlock all Book of Monster entries for the Hive</h3>
                </hgroup>
                <ul>
                    <li>Kill 1 Hive</li>
                    <li>Kill 25 Hives</li>
                    <li>Kill 50 Hives</li>
                    <li>Melee kill 150 Hives</li>
                    <li>Kill 225 Hives</li>
                    <li>Kill 300 Hives with Headshots</li>
                </ul>
            </section>
            <section>
                <hgroup>
                    <h2>Tips</h2>
                    <h3>How to deal with the Hive</h3>
                </hgroup>
                <ul>
                    <li>Dies instantly from a headshot with any weapon</li>
                    <li>Attack the swarm with melee ability to disperse it</li>
                </ul>
            </section>
        </div>
    </main>
</x-layout>
