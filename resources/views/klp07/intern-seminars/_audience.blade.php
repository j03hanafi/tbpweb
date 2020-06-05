  <table class="{{ config('style.table') }}" id="audienceSeminarKp">

    <thead class="{{ config('style.thead') }}">
      <tr>
        <th class="text-center">Nama</th>
        <th class="text-center">NIM</th>
      </tr>
    </thead>

    <tbody>
      @forelse($internship_audiences as $audience)
      <tr>
        <td class="text-center">{{ $audience->student->name }}</td>
        <td class="text-center">{{ $audience->student->nim }}</td>
      </tr>

      @empty
      <tr>
        <td class="text-center" colspan=2>
          <h6>Data tidak ada</h6>
        </td>
      </tr>

      @endforelse
    </tbody>

  </table>