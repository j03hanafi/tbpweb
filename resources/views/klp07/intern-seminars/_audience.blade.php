<table class="{{ config('style.table') }}" id="audienceSeminarKp">

    <thead class="{{ config('style.thead') }}">
      <tr>
        <th class="text-center">No</th>
        <th class="text-center">Nama</th>
      </tr>
    </thead>

    <tbody>
      @forelse($internship_audiences as $no => $audience)
      <tr>
        <td class="text-center">{{ $no+1 }}</td>
        <td><b>{{ $audience->student->name }}</b></td>
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
